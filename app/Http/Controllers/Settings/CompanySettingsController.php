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
        return Inertia::render('settings/company', [
            'settings' => $settings
        ]);
    }

    public function update(CompanySetting $settings, CompanySettingsRequest $request)
    {
        try {
            $validated = $request->validated();
            $settings->fill($validated)->save();

            return to_route('company.edit')->with('toast', [
                'title' => 'Company settings updated',
                'description' => 'Your company settings successfully updated.',
                'type' => 'success',
            ]);

        } catch (\Exception $e) {
            return back()->with('toast', [
                'title' => 'Error',
                'description' => 'An error occurred while updating company settings: ' . $e->getMessage(),
                'type' => 'error',
                'duration' => 8000,
            ]);
        }
    }

}
