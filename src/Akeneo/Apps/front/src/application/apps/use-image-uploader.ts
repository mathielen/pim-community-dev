import {fetch} from '../shared/fetch';
import {useRoute} from '../shared/router';

export interface UploadedImage {
    data: {
        originalFilename: string;
        filePath: string;
    }
}

export const useImageUploader = () => {
    const url = useRoute('pim_enrich_media_rest_post');

    return async (file: File) => {
        const body = new FormData();
        body.append('file', file);
        const result = await fetch<UploadedImage, undefined>(url, {
            method: 'POST',
            headers: [['X-Requested-With', 'XMLHttpRequest']],
            body: body,
        });

        return result;
    }
};

