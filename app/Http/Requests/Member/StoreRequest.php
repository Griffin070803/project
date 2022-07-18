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
            'password' => 'required|min:6'
        ];
    }
    public function messages () {
        return [
            'level.required' => 'Level không được bỏ trống',
            'username.required' => 'Username không được bỏ trống',
            'username.unique' => 'Username đã tồn tại',
            'email.required' => 'Email không được bỏ trống',
            'email.unique' => 'Email đã tổn tại',
            'email.regex' => 'Khong dung dinh dang email',
            'password.required' => 'Password không được bỏ trống',
            'password.min' => 'Password  it nhat la 6 ki tu'
        ];
    }
}