<?php
namespace App\Validators;

use Illuminate\Validation\Rule;

class ConnoteValidator
{
    public static function rules()
    {
        return [
            'connote_id' => 'required|string|max:32',
            'connote_number' => 'required|numeric',
            'connote_service' => 'required|string',
            'connote_service_price' => 'required|numeric',
            'connote_amount' => 'required|numeric',
            'connote_code' => 'required|string',
            'connote_booking_code' => 'nullable|string',
            'connote_order' => 'required|numeric',
            'connote_state' => 'required|string',
            'connote_state_id' => 'required|numeric',
            'zone_code_from' => 'required|string',
            'zone_code_to' => 'required|string',
            'surcharge_amount' => 'nullable|numeric',
            'transaction_id' => 'required|uuid',
            'actual_weight' => 'required|numeric',
            'volume_weight' => 'required|numeric',
            'chargeable_weight' => 'required|numeric',
            'created_at' => 'required|string',
            'updated_at' => 'required|string',
            'organization_id' => 'required|numeric',
            'location_id' => 'required|string',
            'connote_total_package' => 'required|string',
            'connote_surcharge_amount' => 'required|string',
            'connote_sla_day'=> 'required|string',
            'location_name' => 'required|string',
            'location_type' => 'required|string',
            'source_tariff_db' => 'required|string',
            'id_source_tariff' => 'required|string',
            'pod' => 'nullable|string',
            'history' => 'nullable|array',
        ];
    }
}