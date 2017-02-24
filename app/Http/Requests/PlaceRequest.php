<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceRequest extends FormRequest
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
    'place_name' => 'required',
    'place_url' => 'required',
    'place_facebook' => 'required',
    'place_description' => 'required',
    'place_pic' => 'required|mimes:jpeg,png',
    ];
    }


    public function messages() {
    return [
    'place_name.required' => 'กรุณากรอกชื่อ',
    'place_url.required' => 'กรุณากรอกLink url',
    'place_facebook.required' => 'กรุณากรอกLink facebook',
    'place_description.required' => 'กรุณากรอกคำอธิบาย',
    'place_pic.required' => 'กรุณาเลือกไฟล์ภาพ',
    'place_pic.mimes' => 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,png'];
    }
}
