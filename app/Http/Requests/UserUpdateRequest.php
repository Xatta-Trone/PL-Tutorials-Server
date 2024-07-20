<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'id' =>  ['required'],
            'student_id' => ['required', 'numeric'],
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email,' . $this->id],
            'status' => ['required'],
            'user_letter' => ['required'],
            'whitelisted' => ['required'],
            'max_devices' => ['required', 'integer'],
            'dept_access' => ['nullable', 'array'],
        ];
    }


}
