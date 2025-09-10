<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SiteSetting extends Settings
{
    public string  $site_date_format;
    public string  $site_time_format;
    public string  $site_default_timezone;
    public string  $site_default_currency;
    public string  $site_default_currency_symbol;
    public string  $site_currency_position;
    public string  $site_digit_after_decimal_point;
    public bool  $site_email_verification;
    public bool  $site_phone_verification;
    public string  $site_default_language;
    public ?string  $site_android_app_link;
    public ?string  $site_ios_app_link;
    public string  $site_copyright;
    public bool  $site_language_switch;
    public bool  $site_app_debug;
    public bool  $site_auto_update;
    public bool  $site_online_payment_gateway;
    public ?string  $site_default_sms_gateway;
    public bool  $site_cash_on_delivery;
    public int  $site_non_purchase_product_maximum_quantity;
    public bool  $site_is_return_product_price_add_to_credit;

    public static function group(): string
    {
        return 'site';
    }

    public static function prefix(): string
    {
        return 'site_';
    }

}
