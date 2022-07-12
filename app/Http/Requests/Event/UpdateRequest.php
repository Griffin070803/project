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
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required',
            'time' => 'required',
            'slot' => 'required',
            'price' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên sự kiện',
            'image.mimes' => 'Không phải file hình',
            'details.required' => 'Vui lòng nhập nội dung sự kiện',
            'time.required' => 'Vui lòng nhập thời gian tổ chức sự kiện',
            'slot.required' => 'Vui lòng nhập số lượng người tham gia sự kiện',
            'price.required' => 'Vui lòng nhập giá tiền sự kiện',
        ];
    }
}
