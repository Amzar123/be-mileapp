<?php
namespace App\Validators;

use Illuminate\Validation\Rule;

class CustomerValidator
{
    public static function rules()
    {
        return [
            'Nama_Sales' => 'required|string',
            'TOP' => 'required|string',
            'Jenis_Pelanggan' => 'required|string'
        ];
    }
}