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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required|min:6',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Please enter a valid email address',
            'password.required' => 'Please enter a valid password',
            'password.min' => 'Please enter your password of a least 6 digits'
        ];
    }
}
