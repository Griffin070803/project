<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'username' => 'required|unique:members,username,'.$this->id,
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required|min:6'
        ];
    }
    public function messages () {
        return [
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
