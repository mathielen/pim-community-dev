import React from 'react';
import {useImageUploader} from '../use-image-uploader';
import {useMediaUrlGenerator} from '../use-media-url-generator';
import {Translate} from '../../shared/translate';
import styled from 'styled-components';
import {PropsWithTheme} from '../../common/theme';
import Trash from '../../common/assets/icons/trash';

interface Props {
    image: string|null;
    onChange: (image: string|null) => void;
}

const HelperLink = styled.a`
    color: ${({theme}: PropsWithTheme) => theme.color.blue};
    text-decoration: underline;
    font-weight: 700;
`;

const ImageUploader = ({image, onChange}: Props) => {
    const containerClassName = `AknImage AknImage--editable AknImage--wide ${null === image ? 'AknImage--empty' : ''}`;
    const imageUploader = useImageUploader();
    const generateMediaUrl = useMediaUrlGenerator();

    const upload = async (file: File) => {
        if (undefined === file) {
            return;
        }
        const image = await imageUploader(file);

        return image.data.filePath;
    };

    const onInputChange = async (event: React.ChangeEvent<HTMLInputElement>) => {
        if (null !== event.target.files) {
            const mediaUrl = await upload(event.target.files[0]);
            onChange(mediaUrl);
        }
    };

    const previewImage = image ? generateMediaUrl(image) : null;

    return (
        <>
            <div className={containerClassName}>
                <input type='file' accept='image/*' onChange={onInputChange} className='AknImage-updater' />

                {null === previewImage && (
                    <div className='AknImage-uploader'>
                        <span className='AknImage-uploaderIllustration' />
                        <span className='AknImage-uploaderHelper'>
                            <Translate id={'pim_apps.image_helper.upload'} />{' '}
                            <HelperLink href='#'>
                                <Translate id={'pim_apps.image_helper.click_here'} />
                            </HelperLink>.
                        </span>
                    </div>
                )}
                {null !== previewImage && (
                    <>
                        <div className='AknImage-action'>
                            <span className='AknImage-actionItem' onClick={() => onChange(null)}>
                                <Trash color='#ffffff' className='AknImage-actionItemIcon' />{' '}
                                <Translate id={'pim_apps.image_helper.remove'} />
                            </span>
                        </div>
                        <div className='AknImage-displayContainer'>
                            <img className='AknImage-display' src={previewImage} alt={''}/>
                        </div>
                    </>
                )}
            </div>
        </>
    );
};

export default ImageUploader;
