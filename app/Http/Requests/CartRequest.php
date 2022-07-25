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
            'email.required' =>'Please enter your Email',
            'email.regex' => 'Incorrect email format',
            'phone.required' =>'Please enter your phone number',
            'phone.digits' => 'Please enter your phone of a least 10 digits',
            'phone.numeric' => 'Phone must be a number',            
            'fullname.required' => 'Please enter your fullname',
            'fullname.string' => 'Fullname must be a string',
            'fullname.max' => 'Fullname up to 40 characters',
            'fullname.min' => 'Fullname at least 10 characters',
            'address.required' => 'Please enter your address',
            'adult.required' => 'Please enter adult',
            'adult.numeric' => 'Adult must be a number',
            'children.required' => 'Please enter chilren',
            'children.numeric' => 'Children must be a number'
        ];
    }
}
