<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\CompanySettingsRequest;
use App\Settings\CompanySetting;


use Inertia\Inertia;
use Inertia\Response;

class CompanySettingsController extends Controller
{
    /**
     * Show the user's company settings page.
     */
    public function edit(CompanySetting $settings): Response
    {
        return Inertia::render('settings/company',[
            'settings' => $settings
        ]);
    }

    public function update(CompanySetting $settings, CompanySettingsRequest $request)
    {
        try {
            $validated = $request->validated();
            $settings->fill($validated)->save();

            return $this->withSuccessToast(
                'Company Settings Updated',
                'Your company settings have been successfully updated.',
                4000
            );
        } catch (\Exception $e) {
            return $this->withErrorToast(
                'Update Failed',
                'There was an error updating your company settings. Please try again.',
                5000
            );
        }
    }

}
