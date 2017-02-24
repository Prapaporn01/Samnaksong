<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsReguest extends FormRequest
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
    'news_name' => 'required',
    'news_detail' => 'required',
    'newsmain_pic' => 'required|mimes:jpeg,png',
    'news_description' => 'required',
    ];
    }


    public function messages() {
    return [
    'news_name.required' => 'กรุณากรอกหัวข้อข่าว',
    'news_detail.required' => 'กรุณากรอกรายละเอียดข่าว',
    'news_description.required' => 'กรุณากรอกคคำอธิบาย',
    'newsmain_pic.required' => 'กรุณาเลือกไฟล์',
    'newsmain_pic.mimes' => 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,png'];
    }
}
