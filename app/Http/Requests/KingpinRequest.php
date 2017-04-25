<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KingpinRequest extends FormRequest
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
        'kingpin_name' => 'required',
        'kingpin_detail' => 'required',  
        // 'kingpin_type' => 'required',
        'kingpinmain_pic' => 'required|mimes:jpeg,png',
        'files.*' => 'required|mimes:jpeg,jpg,png',
        ];
    }


    public function messages() {
    return [
    'kingpin_name.required' => 'กรุณากรอกชื่อสิ่งสำคัญภายในสำนักสงฆ์',
    'kingpin_detail.required' => 'กรุณากรอกรายละเอียดสิ่งสำคัญภายในสำนักสงฆ์',
    // 'kingpin_type.required' => 'กรุณากรอกประเภทสิ่งสำคัญภายในสำนักสงฆ์',
    'kingpinmain_pic.required'=> 'กรุณาเลือกไฟล์ภาพรูปปก',
    'kingpinmain_pic.mimes'=> 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,png',
    'files[].*.required'=> 'กรุณาเลือกไฟล์รูปภาพ',
    'files[].*.mimes' => 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,png'];
    }
}
