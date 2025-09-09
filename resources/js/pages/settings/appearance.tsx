import { Head } from '@inertiajs/react';

import AppearanceTabs from '@/components/appearance-tabs';
import HeadingSmall from '@/components/heading-small';
import { type BreadcrumbItem } from '@/types';

import { SettingsLayout } from '@/layouts/settings/setting-layout';
import { appearance } from '@/routes';
import { PageProps } from '@/types/globals';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Appearance settings',
        href: appearance().url,
    },
];

export default function Appearance() {
    return (
        <div className="space-y-6">
            <HeadingSmall title="Appearance settings" description="Update your account's appearance settings" />
            <AppearanceTabs />
        </div>
    );
}

Appearance.layout = (page: React.ReactNode & { props: PageProps }) => (
    <SettingsLayout breadcrumbs={breadcrumbs} {...page.props}>
        <Head title="Appearance" />
        {page}
    </SettingsLayout>
);
