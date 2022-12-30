<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SoftwareUpdateRequest extends FormRequest
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
            'name'           => ['required'],
            'department_slug' => ['required'],
            'level_term_slug' => ['required'],
            'course_id'      => ['sometimes', 'nullable'],
            'link'           => ['required', 'url'],
            'status'         => ['required'],
            'post_type'         => ['required'],
            // 'user_id'        => ['required'],
            // 'user_type'      => ['required'],
            // 'image'      => ['sometimes', 'size:1024'],
            'description'      => ['sometimes', 'nullable'],
        ];
    }
}
