<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fname' => 'required|max:40',
            'lname' => 'required|max:20',  
            'email' => 'required|email',
            'message' => 'required',
            'phone' => 'required|alpha_num',
        ];
    }
    public function messages()
    {
        return [
            'fname.required' => 'please enter your first name',
            'lname.required' => 'please enter your last name',
            'email.required' => 'please enter your email',
            'email.email' => 'please enter your email address again',
            'phone.required' => 'please enter your phone',
            'phone.alpha_num' => 'please enter your phone is number',
            'fname.max' => 'please enter your first name max 40 characters',
            'lname.max' => 'please enter your first name max 20 characters',
            'message.required' => 'please enter your message',

        ];
    }
}
