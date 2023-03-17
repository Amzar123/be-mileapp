<?php
namespace App\Validators;

use Illuminate\Validation\Rule;

class OriginValidator
{
    public static function rules()
    {
        return [
            'customer_name' => 'required|string',
            'customer_address' => 'required|string',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|string',
            'customer_address_detail' => 'nullable|string',
            'customer_zip_code' => 'required|string',
            'zone_code' => 'required|string',
            'organization_id' => 'required|integer',
            'location_id' => 'required|string',
        ];
    }
}