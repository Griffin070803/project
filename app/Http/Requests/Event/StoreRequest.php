<?php

namespace App\Http\Requests\Event;

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
            'name' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            'name.required' => 'Vui lòng nhập tên sự kiện',
            'image.required' =>'Vui lòng thêm hình',
            'image.mimes' => 'Không phải file hình',
            'details.required' => 'Vui lòng nhập nội dung sự kiện',
            'timestart.required' => 'Vui lòng nhập thời gian bắt đầu sự kiện',
            'timeend.required' => 'Vui lòng nhập thời gian kết thúc sự kiện',
            'slot.required' => 'Vui lòng nhập số lượng người tham gia sự kiện',
            'slot.numeric' => 'Số lượng người tham gia phải là số',
            'price.required' => 'Vui lòng nhập giá tiền sự kiện',
            'price.numeric' => 'Tiền phải là số',
        ];
    }
}
