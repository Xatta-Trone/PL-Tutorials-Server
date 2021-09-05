<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'key' => ['required'],
            'value' => ['required'],
            'fa4_icon'      => ['sometimes', 'nullable'],
            'fa5_icon'      => ['sometimes', 'nullable'],
        ];
    }
}
