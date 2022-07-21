<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'fullname' => 'required|string|max:40|min:5',
            'phone' => 'required|numeric|digits:10',
            'address'=>'required',
            'adult' => 'required|numeric',
            'children' => 'required|numeric'

        ];
    }
    public function messages () {
        return [
            'email.required' =>'Email không được bỏ trống',
            'email.regex' => 'Khong dung dinh dang email',
            'phone.required' =>'Phone khong duoc bo trong',
            'phone.digits' => 'Phone phải 10 chu so',
            'phone.numeric' => 'Phone phai la 1 day so',            
            'fullname.required' => 'Họ và tên không được bỏ trống',
            'fullname.string' => 'Họ và tên phải là chuỗi kí tự',
            'fullname.max' => 'Họ và tên nhiều nhất 40 kí tự',
            'fullname.min' => 'Họ và tên ít nhất 10 kí tự',
            'address.required' => 'Địa chỉ không được bỏ trống',
            'adult.required' => 'Số người lớn không được bỏ trống',
            'adult.numeric' => 'Số người lớn phải là số',
            'children.required' => 'Số người lớn không được bỏ trống',
            'children.numeric' => 'Số người lớn phải là số'
        ];
    }
}
