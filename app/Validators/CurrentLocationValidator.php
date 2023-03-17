<?php
namespace App\Validators;

use Illuminate\Validation\Rule;

class CurrentLocationValidator
{
    public static function rules()
    {
        return [
            'name' => 'required|string',
            'code' => 'required|string',
            'type' => 'required|string',
        ];
    }
}