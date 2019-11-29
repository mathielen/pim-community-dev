import {FormikHelpers, useFormik} from 'formik';
import React, {useEffect} from 'react';
import {useHistory, useParams} from 'react-router';
import {App} from '../../../domain/apps/app.interface';
import {FlowType} from '../../../domain/apps/flow-type.enum';
import {PimView} from '../../../infrastructure/pim-view/PimView';
import {ApplyButton, Breadcrumb, BreadcrumbItem, Page, PageHeader} from '../../common';
import defaultImageUrl from '../../common/assets/illustrations/api.svg';
import {isErr, isOk} from '../../shared/fetch/result';
import {BreadcrumbRouterLink} from '../../shared/router';
import {Translate} from '../../shared/translate';
import {AppEditForm} from '../components/AppEditForm';
import {useFetchApp} from '../use-fetch-app';
import {useUpdateApp} from '../use-update-app';
import {useMediaUrlGenerator} from '../use-media-url-generator';

export interface FormValues {
    label: string;
    flowType: FlowType;
    image: string|null;
}

export interface FormErrors {
    label?: string;
    flowType?: string;
    image?: string;
}

const initialValues: FormValues = {label: '', flowType: FlowType.OTHER, image: null};

const validate = ({label}: FormValues): FormErrors => {
    const errors: FormErrors = {};
    if (!label || label.trim().length === 0) {
        errors.label = 'akeneo_apps.app.constraint.label.required';
    }

    return errors;
};

export const AppEdit = () => {
    const history = useHistory();
    const generateMediaUrl = useMediaUrlGenerator();

    const {code} = useParams<{code: string}>();

    const updateApp = useUpdateApp(code);
    const handleSubmit = async (
        {label, flowType, image}: FormValues,
        {setSubmitting, resetForm}: FormikHelpers<FormValues>
    ) => {
        const result = await updateApp({
            code,
            label,
            flowType,
            image,
        });
        setSubmitting(false);

        if (isOk(result)) {
            resetForm({
                values: {
                    label: label,
                    flowType: flowType,
                    image: image,
                },
            });
        }
    };

    const formik = useFormik({
        initialValues,
        onSubmit: handleSubmit,
        validate,
    });

    const result = useFetchApp(code);
    useEffect(() => {
        if (isOk(result)) {
            const app: App = result.data;

            formik.resetForm({
                values: {
                    label: app.label,
                    flowType: app.flowType,
                    image: app.image,
                },
            });
        }

        if (isErr(result)) {
            history.push('/apps');
        }
    }, [result]);

    if (!isOk(result)) {
        return <></>;
    }

    const app: App = result.data;

    return (
        <Page>
            <PageHeader
                breadcrumb={
                    <Breadcrumb>
                        <BreadcrumbRouterLink route={'oro_config_configuration_system'}>
                            <Translate id='pim_menu.tab.system' />
                        </BreadcrumbRouterLink>
                        <BreadcrumbItem onClick={() => history.push('/apps')} isLast={false}>
                            <Translate id='pim_menu.item.apps' />
                        </BreadcrumbItem>
                    </Breadcrumb>
                }
                buttons={[
                    <ApplyButton
                        key={0}
                        onClick={() => formik.submitForm()}
                        disabled={!formik.isValid || formik.isSubmitting}
                        classNames={['AknButtonList-item']}
                    >
                        <Translate id='pim_common.save' />
                    </ApplyButton>,
                ]}
                userButtons={
                    <PimView
                        className='AknTitleContainer-userMenuContainer AknTitleContainer-userMenu'
                        viewName='pim-apps-user-navigation'
                    />
                }
                state={
                    formik.dirty && (
                        <div className='updated-status'>
                            <span className='AknState'>
                                <Translate id='pim_common.entity_updated' />
                            </span>
                        </div>
                    )
                }
                imageSrc={null === formik.values.image ?
                  defaultImageUrl :
                  generateMediaUrl(formik.values.image, 'thumbnail')
                }
            >
                {app.label}
            </PageHeader>

            <AppEditForm app={app} formik={formik} />
        </Page>
    );
};
