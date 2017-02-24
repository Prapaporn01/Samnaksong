<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonsRequest extends FormRequest
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
    'person_name' => 'required',
    'person_detail' => 'required',
    'person_file_pic' => 'required|mimes:jpeg,png',
    ];
    }


    public function messages() {
    return [
    'person_name.required' => 'กรุณากรอกชื่อ',
    'person_detail.required' => 'กรุณากรอกรายละเอียดของบุคคลสำคัญที่เกี่ยวข้อง',
    'person_file_pic.required' => 'กรุณาเลือกไฟล์ภาพ',
    'person_file_pic.mimes' => 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,png'];

    }
}
