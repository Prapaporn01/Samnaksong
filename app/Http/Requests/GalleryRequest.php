<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
     * @return array
     */
         public function rules()
    {
    return [
    // 'gallery_detail' => 'required',
    'gallery_file_pic' => 'required|mimes:jpeg,jpg,png',

    ];
    }


    public function messages() {
    return [
    // 'gallery_detail.required' => 'กรุณากรอกคำอธิบาย',
    'gallery_file_pic.required' => 'กรุณาเลือกไฟล์',
    'gallery_file_pic.mimes' => 'กรุณาเลือกไฟล์ สกุล .jpeg,png'
];
    }
}
