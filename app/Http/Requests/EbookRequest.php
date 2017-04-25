<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EbookRequest extends FormRequest
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
    'ebook_name' => 'required',
    'ebook_file' => 'required|mimes:swf',

    ];
    }


    public function messages() {
    return [
    'ebook_name.required' => 'กรุณากรอกชื่อ',
    'ebook_file.required' => 'กรุณาเลือกไฟล์',
    'ebook_file.mimes' => 'กรุณาเลือกไฟล์ สกุล .swf'
];
    }
}
