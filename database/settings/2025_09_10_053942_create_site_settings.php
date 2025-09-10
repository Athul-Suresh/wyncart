<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('site.site_date_format', 'd-m-Y');
        $this->migrator->add('site.site_time_format', 'H:i:s');
        $this->migrator->add('site.site_default_timezone', 'Asia/Kolkata');
        $this->migrator->add('site.site_default_currency', 'INR');
        $this->migrator->add('site.site_default_currency_symbol', '₹');
        $this->migrator->add('site.site_currency_position', 'left');
        $this->migrator->add('site.site_digit_after_decimal_point', 2);
        $this->migrator->add('site.site_email_verification', false);
        $this->migrator->add('site.site_phone_verification', false);
        $this->migrator->add('site.site_default_language', 'en');
        $this->migrator->add('site.site_android_app_link', '');
        $this->migrator->add('site.site_ios_app_link', '');
        $this->migrator->add('site.site_copyright', '');
        $this->migrator->add('site.site_language_switch', true);
        $this->migrator->add('site.site_app_debug', false);
        $this->migrator->add('site.site_auto_update', false);
        $this->migrator->add('site.site_online_payment_gateway', true);
        $this->migrator->add('site.site_default_sms_gateway', '');
        $this->migrator->add('site.site_cash_on_delivery', true);
        $this->migrator->add('site.site_non_purchase_product_maximum_quantity', 1);
        $this->migrator->add('site.site_is_return_product_price_add_to_credit', false);

    }
};
