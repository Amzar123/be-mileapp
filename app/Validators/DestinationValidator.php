<?php
namespace App\Validators;

use Illuminate\Validation\Rule;

class DestinationValidator
{
    public static function rules()
    {
        return [
            'customer_name' => 'required|string|max:255',
            'customer_address' => 'required|string|max:255',
            'customer_email' => 'nullable|email',
            'customer_phone' => 'required|string|max:20',
            'customer_address_detail' => 'nullable|string|max:255',
            'customer_zip_code' => 'required|string|max:20',
            'zone_code' => 'required|string|max:20',
            'organization_id' => 'required|integer',
            'location_id' => 'required|string',
        ];
    }
}