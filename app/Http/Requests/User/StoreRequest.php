<?php

namespace App\Http\Requests\User;

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
            'name' => 'required|unique:name',
            'intro' => 'required',
            'content' => 'required'

        ];
    }

    public function messages() {
        return [
            'name.required' => 'Please enter marine_creatures name',
            'name.unique' => 'Marine_creatures name already exists',
            'intro.required' => 'Please enter intro',
            'content.required' => 'Please enter content',
        ];
    }
}
