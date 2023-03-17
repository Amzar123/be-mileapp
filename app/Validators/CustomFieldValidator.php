<?php
namespace App\Validators;

use Illuminate\Validation\Rule;

class CustomFieldValidator
{
    public static function rules()
    {
        return [
            'catatan_tambahan' => 'nullable|string',
        ];
    }
}