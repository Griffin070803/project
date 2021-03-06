<?php

namespace App\Http\Requests\Event;

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
            'name' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            'details' => 'required',
            'timestart' => 'required',
            'timeend' => 'required',
            'slot' => 'required|numeric',
            'price' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please enter event',
            'image.mimes' => 'Incorrest image format',
            'details.required' => 'Please enter event details',
            'timestart.required' => 'Please enter event time start',
            'timeend.required' => 'Please enter event time end',
            'slot.required' => 'Please enter event slot',
            'slot.numeric' => 'Slot must be a number',
            'price.required' => 'Please enter event price',
            'price.numeric' => 'Price must be a number',
        ];
    }
}
