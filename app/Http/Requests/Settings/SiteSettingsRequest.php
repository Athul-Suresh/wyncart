<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SiteSettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
        public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        dd($this->all());

        return [
            'site_date_format' => 'required|string',
            'site_time_format' => 'required|string',
            'site_default_timezone' => 'required|string',
            'site_default_currency' => 'required|string',
            'site_default_currency_symbol' => 'required|string',
            'site_currency_position' => 'required|string',
            'site_digit_after_decimal_point' => 'required|integer',
            'site_email_verification' => 'required|boolean',
            'site_phone_verification' => 'required|boolean',
            'site_default_language' => 'required|string',
            'site_android_app_link' => 'nullable|string',
            'site_ios_app_link' => 'nullable|string',
            'site_copyright' => 'nullable|string',
            'site_language_switch' => 'required|boolean',
            'site_app_debug' => 'required|boolean',
            'site_auto_update' => 'required|boolean',
            'site_online_payment_gateway' => 'required|boolean',
            'site_default_sms_gateway' => 'nullable|string',
            'site_cash_on_delivery' => 'required|boolean',
            'site_non_purchase_product_maximum_quantity' => 'required|integer',
            'site_is_return_product_price_add_to_credit' => 'required|boolean',
        ];
    }

}
