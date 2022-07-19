<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|max:50',
            'password' => 'required|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'required' => __('message.required'),
            'max' => __('message.max'),
            'min' => __('message.min'),
            'confirmed' => __('message.password_confirmed'),
        ];
    }

    // public function attributes()
    // {
    //     return [
    //         'user_name' => 'Tên tài khoản',
    //         'email' => 'Email',
    //         'password' => 'Mật khẩu',
    //     ];
    // }
}
