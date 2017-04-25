<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorshipRequest extends FormRequest
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
    'worship_name' => 'required',
    'worship_detail' => 'required',
    'worshipmain_pic'=>'required|mimes:jpeg,jpg,png',
    'files.*' => 'required|mimes:jpeg,jpg,png',

    ];
    }


    public function messages() {
    return [
    'worship_name.required' => 'กรุณากรอกชื่อเครื่องสักการะบูชา',
    'worship_detail.required' => 'กรุณากรอกรายละเอียดเครื่องสักการะบูชา',
    'worshipmain_pic.required'=> 'กรุณาเลือกไฟล์ภาพรูปปก',
    'worshipmain_pic.mimes' => 'กรุณาเลือกไฟล์ภาพรูปปกนามสกุล jpeg,png',
    'files.*.required'=> 'กรุณาเลือกไฟล์รูปภาพ',
    'files.*.mimes' => 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,png'];
    }
}
