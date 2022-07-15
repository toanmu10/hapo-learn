<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => 'required|max:50',
            'password' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => __('message.username.required'),
            'username.max' => __('message.username.max'),
            'password.required' => __('message.password.required'),
            'password.min' => __('message.password.min'),
        ];
    }
}
