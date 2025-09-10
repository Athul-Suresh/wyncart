<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\SiteSettingsRequest;
use App\Settings\SiteSetting;


use Inertia\Inertia;
use Inertia\Response;

class SiteSettingsController extends Controller
{
    /**
     * Show the user's site settings page.
     */
    public function edit(SiteSetting $settings): Response
    {
        return Inertia::render('settings/site', [
            'settings' => $settings
        ]);
    }

    public function update(SiteSetting $settings, SiteSettingsRequest $request)
    {
        try {
            $validated = $request->validated();
            $settings->fill($validated)->save();

            return to_route('site.edit')->with('toast', [
                'title' => 'Site settings updated',
                'description' => 'Your site settings successfully updated.',
                'type' => 'success',
            ]);

        } catch (\Exception $e) {
            return back()->with('toast', [
                'title' => 'Error',
                'description' => 'An error occurred while updating site settings: ' . $e->getMessage(),
                'type' => 'error',
                'duration' => 8000,
            ]);
        }
    }

}
