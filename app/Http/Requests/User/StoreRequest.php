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
            'name.required' => 'Vui lòng nhập tên sinh vật ',
            'name.unique' => 'sản phẩm đã tồn tại rồi ',
            'intro.required' => 'Vui lòng nhập giới thiệu ',
            'content.required' => 'Vui lòng nhập nội dung ',
        ];
    }
}
