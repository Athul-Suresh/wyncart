<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class CompanySetting extends Settings
{
    public string  $company_name ;
    public string  $company_email ;
    public string  $company_calling_code ;
    public string  $company_phone ;
    public string  $company_website ;
    public string  $company_city ;
    public string  $company_state ;
    public string  $company_country_code ;
    public string  $company_zip_code ;
    public string  $company_latitude ;
    public string  $company_longitude ;
    public string  $company_address ;

    public static function group(): string
    {
        return 'company';
    }

    public static function prefix(): string
    {
        return 'company_';
    }

    
}
