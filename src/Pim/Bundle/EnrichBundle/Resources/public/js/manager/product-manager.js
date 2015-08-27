'use strict';

define([
        'jquery',
        'underscore',
        'module',
        'oro/mediator',
        'routing',
        'pim/attribute-manager',
        'pim/fetcher-registry',
        'pim/product-edit-form/cache-invalidator'
    ], function (
        $,
        _,
        module,
        mediator,
        Routing,
        AttributeManager,
        FetcherRegistry,
        CacheInvalidator
    ) {
        return {
            productValues: null,
            get: function (id) {
                return $.getJSON(Routing.generate(module.config().urls.get, { id: id }))
                    .then(function (product) {
                        var cacheInvalidator = new CacheInvalidator();
                        cacheInvalidator.checkStructureVersion(product);

                        return this.generateMissing(product);
                    }.bind(this))
                    .then(function (product) {

                        mediator.trigger('pim_enrich:form:product:post_fetch', product);

                        return product;
                    })
                    .promise();
            },
            save: function (id, data) {
                return $.ajax({
                    type: 'POST',
                    url: Routing.generate(module.config().urls.post, {id: id}),
                    contentType: 'application/json',
                    data: JSON.stringify(data)
                }).then(function (product) {
                    mediator.trigger('pim_enrich:form:entity:post_save', product);

                    return product;
                }.bind(this));
            },
            remove: function (id) {
                return $.ajax({
                    type: 'DELETE',
                    url: Routing.generate(module.config().urls.remove, {id: id}),
                    headers: { accept: 'application/json' },
                    data: { _method: 'DELETE' }
                });
            },
            getValues: function (product) {
                return AttributeManager.getAttributesForProduct(product).then(function (attributes) {
                    _.each(attributes, function (attributeCode) {
                        if (!product.values[attributeCode]) {
                            product.values[attributeCode] = [];
                        }
                    }.bind(this));

                    return product.values;
                });
            },
            doGenerateMissing: function (product) {
                return $.when(
                    FetcherRegistry.getFetcher('attribute').fetchAll(),
                    FetcherRegistry.getFetcher('locale').fetchAll(),
                    FetcherRegistry.getFetcher('channel').fetchAll(),
                    FetcherRegistry.getFetcher('currency').fetchAll(),
                    FetcherRegistry.getFetcher('association-type').fetchAll(),
                    AttributeManager.getAttributesForProduct(product)
                ).then(function (attributes, locales, channels, currencies, associationTypes, productAttributes) {
                    var values = {};
                    product.values = Array.isArray(product.values) && 0 === product.values.length ? {} : product.values;

                    _.each(productAttributes, function (attributeCode) {
                        var attribute = _.findWhere(attributes, {code: attributeCode});

                        values[attribute.code] = AttributeManager.generateMissingValues(
                            _.has(product.values, attribute.code) ? product.values[attribute.code] : [],
                            attribute,
                            locales,
                            channels,
                            currencies
                        );
                    });

                    var associations = {};
                    _.each(associationTypes, function (assocType) {
                        associations[assocType.code] = AttributeManager.generateMissingAssociations(
                            _.has(product.associations, assocType.code) ? product.associations[assocType.code] : {}
                        );
                    });

                    product.values       = values;
                    product.associations = associations;

                    return product;
                });
            },
            generateMissing: function (product) {
                return this.doGenerateMissing(product);
            }
        };
    }
);
