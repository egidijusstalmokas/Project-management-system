<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name' => 'required|string|max:255',
            'company_code' => 'required|string|min:5|max:40',
            'vat_code' => 'nullable|string|min:5|max:40',
            'address' => 'required|string|min:2|max:500',
            'city' => 'required|string|min:2|max:100',
            'postal_code' => 'required|string|min:3|max:25',
            'country' => 'required|string|min:2|max:100',
            'company_manager' => 'required|string|min:2|max:255',
        ];
    }
}
