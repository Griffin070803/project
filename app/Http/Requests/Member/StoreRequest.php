<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'level' => 'required',
            'username' => 'required|unique:members',
            'email' => 'required|unique:members|regex:/(.+)@(.+)\.(.+)/i',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'password' => 'required|min:6'
        ];
    }
    public function messages () {
        return [
            'level.required' => 'Please chose a level',
            'username.required' => 'Please enter your username',
            'username.unique' => 'Username already exists',
            'email.required' => 'Please enter your Email',
            'email.unique' => 'Email already exists',
            'email.regex' => 'Incorrect email format',
            'password.required' => 'Please enter your password',
            'password.min' => 'Please enter your password of a least 6 digits'
        ];
    }
}
