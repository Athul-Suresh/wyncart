import InputError from '@/components/input-error';
import {
    Label,
    InputSelect,
    Input,
} from '@/components/ui';
import { CURRENCIES, CURRENCY_SYMBOLS, DATE_FORMATS, TIME_FORMATS, TIMEZONES } from '@/lib/utils';

export default function SiteForm({ errors, settings }: { errors: Record<string, string>; settings: App.Data.Settings.SiteSetting }) {


    return (
        <div className="col-span-2">
            <div className="grid gap-6 md:grid-cols-2 lg:grid-cols-2">
                                <div>
                    <Label htmlFor="site_date_format" className="text-sm font-medium" required={true}>
                        Date Format
                    </Label>
                    <InputSelect
                        name="site_date_format"
                        options={DATE_FORMATS}
                        defaultValue={settings.site_date_format}
                        placeholder="Select date format..."
                        searchPlaceholder="Search date formats..."
                        emptyMessage="No date format found."
                        width="w-full"
                    />
                    <InputError message={errors.site_date_format} className="mt-2" />
                </div>
                                <div>
                    <Label htmlFor="site_time_format" className="text-sm font-medium" required={true}>
                        Time Format
                    </Label>
                    <InputSelect
                        name="site_time_format"
                        options={TIME_FORMATS}
                        defaultValue={settings.site_time_format}
                        placeholder="Select time format..."
                        searchPlaceholder="Search time formats..."
                        emptyMessage="No time format found."
                        width="w-full"
                    />
                    <InputError message={errors.site_time_format} className="mt-2" />
                </div>
                                <div>
                    <Label htmlFor="site_time_format" className="text-sm font-medium" required={true}>
                       TImezone
                    </Label>
                    <InputSelect
                        name="site_time_format"
                        options={TIMEZONES}
                        defaultValue={settings.site_default_timezone}
                        placeholder="Select time zone..."
                        searchPlaceholder="Search time zones..."
                        emptyMessage="No time zone found."
                        width="w-full"
                    />
                    <InputError message={errors.site_time_format} className="mt-2" />
                </div>
                                <div>
                    <Label htmlFor="site_default_currency" className="text-sm font-medium" required={true}>
                       Currency
                    </Label>
                    <InputSelect
                        name="site_default_currency"
                        options={CURRENCIES}
                        defaultValue={settings.site_default_currency}
                        placeholder="Select currency..."
                        searchPlaceholder="Search currencies..."
                        emptyMessage="No currency found."
                        onValueChange={(value: string) => {
                            const symbol = CURRENCY_SYMBOLS[value as keyof typeof CURRENCY_SYMBOLS];
                            // settings.site_default_currency_symbol = typeof symbol === 'string' ? symbol : symbol || '';
                        }}
                        width="w-full"
                    />
                    <InputError message={errors.site_default_currency} className="mt-2" />
                </div>
                                <div>
                    <Label htmlFor="site_default_currency_symbol" className="text-sm font-medium" required={true}>
                       Currency Symbol
                    </Label>
                    <Input
                        name="site_default_currency_symbol"
                        defaultValue={settings.site_default_currency_symbol}
                        placeholder="Select currency..."
                        readOnly
                    />
                    <InputError message={errors.site_default_currency_symbol} className="mt-2" />
                </div>
            </div>
        </div>
    );
}
