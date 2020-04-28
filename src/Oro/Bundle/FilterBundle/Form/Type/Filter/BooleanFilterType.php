<?php

namespace Oro\Bundle\FilterBundle\Form\Type\Filter;

use Symfony\Component\OptionsResolver\OptionsResolver;

class BooleanFilterType extends AbstractChoiceType
{
    public const TYPE_YES = 1;
    public const TYPE_NO = 2;
    public const NAME = 'oro_type_boolean_filter';

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        return ChoiceFilterType::NAME;
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $fieldChoices = [
            self::TYPE_YES => $this->translator->trans('oro.filter.form.label_type_yes'),
            self::TYPE_NO  => $this->translator->trans('oro.filter.form.label_type_no'),
        ];

        $resolver->setDefaults(
            [
                'field_options' => ['choices' => $fieldChoices],
            ]
        );
    }
}
