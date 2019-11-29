import React from 'react';
import {useHistory} from 'react-router';
import {Figure, FigureCaption, FigureImage} from '../../common';
import imgUrl from '../../common/assets/illustrations/api.svg';
import {useMediaUrlGenerator} from '../use-media-url-generator';

interface Props {
    code: string;
    label: string;
    image: string|null;
}

export const App = ({code, label, image}: Props) => {
    const history = useHistory();
    const generateMediaUrl = useMediaUrlGenerator();

    return (
        <Figure onClick={() => history.push(`/apps/${code}/edit`)}>
            <FigureImage src={null === image ? imgUrl : generateMediaUrl(image, 'thumbnail')} alt={label} />
            <FigureCaption title={label}>{label}</FigureCaption>
        </Figure>
    );
};
