import {useRouting} from '../shared/router/use-routing';

export const useMediaUrlGenerator = () => {
    const routing = useRouting();

    return (path: string, filter: string = 'preview') => {
        const filename = encodeURIComponent(path);

        return routing('pim_enrich_media_show', {filename, filter});
    }
};
