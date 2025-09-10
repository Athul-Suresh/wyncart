<?php

declare(strict_types=1);

namespace App\Data\Settings;

use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
final class SiteSetting extends Data
{
     public function __construct(
        public string  $site_date_format = 'd-m-Y',
        public string  $site_time_format = 'H:i:s',
        public string  $site_default_timezone = 'Asia/Kolkata',
        public string  $site_default_currency= 'INR',
        public string  $site_default_currency_symbol = '₹',
        public string  $site_currency_position = 'left',
        public string  $site_digit_after_decimal_point = '2',
        public bool  $site_email_verification = false,
        public bool  $site_phone_verification = false,
        public string  $site_default_language,
        public ?string  $site_android_app_link = null,
        public ?string  $site_ios_app_link = null,
        public string  $site_copyright,
        public bool  $site_language_switch = true,
        public bool  $site_app_debug = false,
        public bool  $site_auto_update = false,
        public bool  $site_online_payment_gateway = true,
        public ?string  $site_default_sms_gateway = null,
        public bool  $site_cash_on_delivery = true,
        public int  $site_non_purchase_product_maximum_quantity = 1,
        public bool  $site_is_return_product_price_add_to_credit = false,
    ) {

    }
}
