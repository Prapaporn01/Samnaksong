<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DirectoryRequest extends FormRequest
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
    'directory_name' => 'required',
    'directory_name_fair' => 'required',  
    // 'directory_time' => 'required',
    'directory_position' => 'required',
    'directory_detail' => 'required',
    'directorymain_pic' => 'required|mimes:jpeg,png',
    'files.*' => 'required|mimes:jpeg,png',
    ];
    }


    public function messages() {
    return [
    'directory_name.required' => 'กรุณากรอกชื่อเจ้าอาวาส',
    'directory_name_fair.required' => 'กรุณากรอกฉายาทางธรรม',
    // 'directory_time.required' => 'กรุณากรอกเวลา',
    'directory_position.required' => 'กรุณากรอกตำแหน่งเจ้าอาวาส',
    'directory_detail.required' => 'กรุณากรอกรายละเอียดเจ้าอาวาส',
    'directorymain_pic.required'=> 'กรุณาเลือกไฟล์ภาพรูปปก',
    'directorymain_pic.mimes'=> 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,png',
    'files[].*.required'=> 'กรุณาเลือกไฟล์ภาพรูปภาพ',
    'files[].*.mimes'=> 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,png'];
    }
}
