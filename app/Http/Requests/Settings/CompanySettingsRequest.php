<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CompanySettingsRequest extends FormRequest
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
      
        return [
            'company_name' => 'required|string|min:3|max:255',
            'company_email' => 'required|email|max:255',
            'company_calling_code' => 'nullable|string|max:5',
            'company_phone' => 'nullable|string|max:15',
            'company_website' => 'nullable|url|max:100',
            'company_city' => 'nullable|string|max:50',
            'company_state' => 'nullable|string|max:50',
            'company_country_code' => 'nullable|string|max:3',
            'company_zip_code' => 'nullable|string|max:10',
            'company_latitude' => 'nullable|numeric|between:-90,90',
            'company_longitude' => 'nullable|numeric|between:-180,180',
            'company_address' => 'nullable|string|min:10|max:200',
        ];
    }




}
