import CompanySettingsController from '@/actions/App/Http/Controllers/Settings/CompanySettingsController';
import { type BreadcrumbItem } from '@/types/index';
import { type PageProps } from '@/types/globals';
import { Form, Head } from '@inertiajs/react';

import HeadingSmall from '@/components/heading-small';
import InputError from '@/components/input-error';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Textarea } from '@/components/ui/textarea';
import { SettingsLayout } from '@/layouts/settings/setting-layout';
import { edit } from '@/routes/company';
import { Loader2 } from 'lucide-react';


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Company settings',
        href: edit().url,
    },
];

type CompanySettingProp = PageProps<{
  settings: App.Data.Settings.CompanySettings;
}>;

export default function CompanySetting({ settings }: CompanySettingProp) {

    return (
        <>
            <div className="space-y-6">
                <HeadingSmall title="Company information" description="Update your company Informations" />

                <Form
                    {...CompanySettingsController.update.form()}
                    options={{
                        preserveScroll: true,
                    }}
                    className="space-y-6"
                >
                    {({ processing, errors }) => (
                        <>
                            <div className="grid gap-4 md:grid-cols-2 lg:grid-cols-2">
                                {/* Company Name */}
                                <div>
                                    <Label htmlFor="company_name">Name</Label>
                                    <Input
                                        id="company_name"
                                        className="mt-1 block w-full"
                                        defaultValue={settings.company_name}
                                        name="company_name"
                                        required
                                        placeholder="Company Name"
                                    />
                                    <InputError className="mt-2" message={errors.company_name} />
                                </div>

                                {/* Phone Code */}
                                <div>
                                    <Label htmlFor="company_calling_code">Phone Code</Label>
                                    <Input
                                        id="company_calling_code"
                                        className="mt-1 block w-full"
                                        defaultValue={settings.company_calling_code}
                                        name="company_calling_code"
                                        required
                                        placeholder="+91"
                                    />
                                    <InputError className="mt-2" message={errors.company_calling_code} />
                                </div>

                                {/* Phone */}
                                <div>
                                    <Label htmlFor="company_phone">Phone</Label>
                                    <Input
                                        id="company_phone"
                                        className="mt-1 block w-full"
                                        defaultValue={settings.company_phone}
                                        name="company_phone"
                                        required
                                        placeholder="1234567890"
                                    />
                                    <InputError className="mt-2" message={errors.company_phone} />
                                </div>

                                {/* Email */}
                                <div>
                                    <Label htmlFor="company_email">Email</Label>
                                    <Input
                                        id="company_email"
                                        className="mt-1 block w-full"
                                        defaultValue={settings.company_email}
                                        name="company_email"
                                        required
                                        placeholder="example@example.com"
                                    />
                                    <InputError className="mt-2" message={errors.company_email} />
                                </div>

                                {/* Website */}
                                <div>
                                    <Label htmlFor="company_website">Website</Label>
                                    <Input
                                        id="company_website"
                                        className="mt-1 block w-full"
                                        defaultValue={settings.company_website}
                                        name="company_website"
                                        required
                                        placeholder="https://www.example.com"
                                    />
                                    <InputError className="mt-2" message={errors.company_website} />
                                </div>

                                {/* City */}
                                <div>
                                    <Label htmlFor="company_city">City</Label>
                                    <Input
                                        id="company_city"
                                        className="mt-1 block w-full"
                                        defaultValue={settings.company_city}
                                        name="company_city"
                                        required
                                        placeholder="City"
                                    />
                                    <InputError className="mt-2" message={errors.company_city} />
                                </div>

                                {/* State */}
                                <div>
                                    <Label htmlFor="company_state">State</Label>
                                    <Input
                                        id="company_state"
                                        className="mt-1 block w-full"
                                        defaultValue={settings.company_state}
                                        name="company_state"
                                        required
                                        placeholder="State"
                                    />
                                    <InputError className="mt-2" message={errors.company_state} />
                                </div>

                                {/* Country Code */}
                                <div>
                                    <Label htmlFor="company_country_code">Country Code</Label>
                                    <Input
                                        id="company_country_code"
                                        className="mt-1 block w-full"
                                        defaultValue={settings.company_country_code}
                                        name="company_country_code"
                                        required
                                        placeholder="IN"
                                    />
                                    <InputError className="mt-2" message={errors.company_country_code} />
                                </div>

                                {/* Zip Code */}
                                <div>
                                    <Label htmlFor="company_zip_code">Zip Code</Label>
                                    <Input
                                        id="company_zip_code"
                                        className="mt-1 block w-full"
                                        defaultValue={settings.company_zip_code}
                                        name="company_zip_code"
                                        required
                                        placeholder="Zip Code"
                                    />
                                    <InputError className="mt-2" message={errors.company_zip_code} />
                                </div>

                                {/* Latitude */}
                                <div>
                                    <Label htmlFor="company_latitude">Latitude</Label>
                                    <Input
                                        id="company_latitude"
                                        className="mt-1 block w-full"
                                        defaultValue={settings.company_latitude}
                                        name="company_latitude"
                                        required
                                        placeholder="Latitude"
                                    />
                                    <InputError className="mt-2" message={errors.company_latitude} />
                                </div>

                                {/* Longitude */}
                                <div>
                                    <Label htmlFor="company_longitude">Longitude</Label>
                                    <Input
                                        id="company_longitude"
                                        className="mt-1 block w-full"
                                        defaultValue={settings.company_longitude}
                                        name="company_longitude"
                                        required
                                        placeholder="Longitude"
                                    />
                                    <InputError className="mt-2" message={errors.company_longitude} />
                                </div>

                                {/* Address */}
                                <div>
                                    <Label htmlFor="company_address">Address</Label>
                                    <Textarea
                                        id="company_address"
                                        className="mt-1 block w-full"
                                        defaultValue={settings.company_address}
                                        name="company_address"
                                        required
                                        placeholder="Company Address"
                                    />
                                    <InputError className="mt-2" message={errors.company_address} />
                                </div>
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

CompanySetting.layout = (page: React.ReactNode & { props: PageProps }) => (
    <SettingsLayout breadcrumbs={breadcrumbs} {...page.props}>
        <Head title="Profile" />
        {page}
    </SettingsLayout>
);
