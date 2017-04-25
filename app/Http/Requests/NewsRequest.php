<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
    'news_title' => 'required',
    'news_description' => 'required',
    'newsmain_pic' => 'required|mimes:jpeg,png',
   
    ];
    }


    public function messages() {
    return [
    'news_title.required' => 'กรุณากรอกหัวข้อข่าว',
    'news_description.required' => 'กรุณากรอกคคำอธิบาย',
    'newsmain_pic.required' => 'กรุณาเลือกไฟล์ภาพรูปปก',
    'newsmain_pic.mimes' => 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,png'];
    }
}
