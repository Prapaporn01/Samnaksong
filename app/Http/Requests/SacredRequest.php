<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SacredRequest extends FormRequest
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
    'sacred_name' => 'required',
    'sacred_detail' => 'required',
    'sacredmain_pic'=>'required|mimes:jpeg,jpg,png',
    'sacred_type' => 'required',
    ];
    }


    public function messages() {
    return [
    'sacred_name.required' => 'กรุณากรอกชื่อวัตถุมงคล',
    'sacred_detail.required' => 'กรุณากรอกณายละเอียด',
    'sacred_type.required' => 'กรุณากรอกประเภทวัตถุมงคล',
    'sacredmain_pic.required'=> 'กรุณาเลือกไฟล์ภาพ',
    'sacredmain_pic.mimes' => 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,png'];
    }
}
