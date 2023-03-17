<?php
namespace App\Validators;

use Illuminate\Validation\Rule;

use App\Validators\ConnoteValidator;
use App\Validators\CurrentLocationValidator;
use App\Validators\CustomFieldValidator;
use App\Validators\CustomerValidator;
use App\Validators\DestinationValidator;
use App\Validators\OriginValidator;

class PackageValidator
{
    public static function rules()
    {
        return [
            'transaction_id' => 'required|string',
            'customer_name' => 'required|string',
            'customer_code' => 'required|string',
            'transaction_amount' => 'required',
            'transaction_discount' => 'nullable|string',
            'transaction_additional_field' => "nullable",
            'transaction_payment_type' => 'required|string',
            'transaction_state' => 'required|string',
            'transaction_code' => 'required|string',
            'transaction_order' => 'required|numeric',
            'location_id' => 'required|string',
            'organization_id' => 'required|numeric',
            'created_at' => 'required|string',
            'updated_at' => 'required|string',
            'transaction_payment_type_name' => 'required|string',
            'transaction_cash_amount' => 'required|numeric',
            'transaction_cash_change' => 'required|numeric',
            'connote_id' =>'required|string',
            'connote' => [ConnoteValidator::rules()],
            'customer_attribute' => [CustomerValidator::rules()],
            'origin_data' => [OriginValidator::rules()],
            'destination_data' => [DestinationValidator::rules()],
            'custom_field' => [CustomFieldValidator::rules()],
            'current_location' => [CurrentLocationValidator::rules()],
            'koli_data' => [KoliValidator::rules()],
        ];
    }
}