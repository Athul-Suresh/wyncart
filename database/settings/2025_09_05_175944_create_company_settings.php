<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('company.company_name', 'Your Company Name');
        $this->migrator->add('company.company_email', 'your@email.com');
        $this->migrator->add('company.company_calling_code', '+1');
        $this->migrator->add('company.company_phone', '123-456-7890');
        $this->migrator->add('company.company_website', 'https://yourcompany.com');
        $this->migrator->add('company.company_city', 'Your City');
        $this->migrator->add('company.company_state', 'Your State');
        $this->migrator->add('company.company_country_code', 'US');
        $this->migrator->add('company.company_zip_code', '12345');
        $this->migrator->add('company.company_latitude', '37.7749');
        $this->migrator->add('company.company_longitude', '-122.4194');
        $this->migrator->add('company.company_address', '123 Your St, Your City, Your State, 12345');
    }
};
