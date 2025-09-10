import SiteSettingsController from '@/actions/App/Http/Controllers/Settings/SiteSettingsController';
import { type PageProps } from '@/types/globals';
import { type BreadcrumbItem } from '@/types/index';
import { Form, Head } from '@inertiajs/react';

import HeadingSmall from '@/components/heading-small';
import { SettingsLayout } from '@/layouts/settings/setting-layout';
import { edit } from '@/routes/site';
import { Loader2 } from 'lucide-react';
import SiteForm from './components/site-form';
import { Button } from '@/components/ui';
const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Company settings',
        href: edit().url,
    },
];

type SiteSettingProp = PageProps<{
    settings: App.Data.Settings.SiteSetting;
}>;

export default function SiteSetting({ settings }: SiteSettingProp) {
    return (
        <>
            <div className="space-y-6">
                <HeadingSmall title="Site information" description="Update your site Informations" />

                <Form
                    {...SiteSettingsController.update.form()}
                    options={{
                        preserveScroll: true,
                    }}
                    className="space-y-6"
                >
                    {({ processing, errors }) => (
                        <>
                            <div className="grid gap-6 md:grid-cols-2 lg:grid-cols-2">
                                <SiteForm errors={errors} settings={settings}/>
                            </div>
                                 <div className="flex items-center gap-4">
                                <Button type="submit" variant="default" disabled={processing}>
                                    {processing && <Loader2 className="mr-2 h-4 w-4 animate-spin" />}
                                    Save
                                </Button>
                            </div>
                        </>
                    )}
                </Form>
            </div>
        </>
    );
}

SiteSetting.layout = (page: React.ReactNode & { props: PageProps }) => (
    <SettingsLayout breadcrumbs={breadcrumbs} {...page.props}>
        <Head title="Site Settings" />
        {page}
    </SettingsLayout>
);
