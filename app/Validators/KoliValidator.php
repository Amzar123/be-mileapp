<?php
namespace App\Validators;

use Illuminate\Validation\Rule;

class KoliValidator
{
    public static function rules()
    {
        return [
            'koli_length' => 'required|numeric|min:0',
            'awb_url' => 'required|url',
            'created_at' => 'required|date_format:Y-m-d H:i:s',
            'koli_chargeable_weight' => 'required|numeric|min:0',
            'koli_width' => 'required|numeric|min:0',
            'koli_surcharge' => 'nullable|array',
            'koli_height' => 'required|numeric|min:0',
            'updated_at' => 'required|date_format:Y-m-d H:i:s',
            'koli_description' => 'required|string|max:255',
            'koli_formula_id' => 'nullable|string|max:255',
            'connote_id' => 'required|string|max:255',
            'koli_volume' => 'required|numeric|min:0',
            'koli_weight' => 'required|numeric|min:0',
            'koli_id' => 'required|string|max:255',
            'koli_custom_field' => 'nullable|array',
            'koli_custom_field.awb_sicepat' => 'nullable|string|max:255',
            'koli_custom_field.harga_barang' => 'nullable|numeric|min:0',
            'koli_code' => 'required|string|max:255',
        ];
    }
}