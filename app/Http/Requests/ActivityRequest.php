<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
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
    'activities_name' => 'required',
    'activities_detail' => 'required',  
    'activities_date' => 'required',
    'activitiesmain_pic' => 'required|mimes:jpeg,png',
    ];
    }


    public function messages() {
    return [
    'activities_name.required' => 'กรุณากรอกชื่อกิจกรรม',
    'activities_detail.required' => 'กรุณากรอกรายละเอียดกิจกรรม',
    'activities_date.required' => 'กรุณากรอกเวลากิจกรรม',
    'activitiesmain_pic.required'=> 'กรุณาเลือกไฟล์ภาพ',
    'activitiesmain_pic.mimes'=> 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,png'];
    }
}
