<?php

declare(strict_types=1);

namespace App\Data\Settings;

use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
final class CompanySettings extends Data
{
    public function __construct(
        public ?string $company_name = null,
        public ?string $company_email = null,
        public ?string $company_calling_code = null,
        public ?string $company_phone = null,
        public ?string $company_website = null,
        public ?string $company_city = null,
        public ?string $company_state = null,
        public ?string $company_country_code = null,
        public ?string $company_zip_code = null,
        public ?float $company_latitude = null,
        public ?float $company_longitude = null,
        public ?string $company_address = null,
    ) {
    }
}



