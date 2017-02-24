<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrayRequest extends FormRequest
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
    'pray_title' => 'required',
    'pray_detail' => 'required|mimes:pdf',
    'pray_sound' => 'required|mimes:mpga',
    ];
    }


    public function messages() {
    return [
    'pray_title.required' => 'กรุณากรอกชื่อบทสวดมนต์',
    'pray_detail.required' => 'กรุณาใส่ไฟล์บทสวดมนต์',
    'pray_detail.mimes' => 'กรุณาใส่ไฟล์บทสวดมนต์ สกุล .pdf',
    'pray_sound.required' => 'กรุณาใส่ไฟล์เสียง',
    'pray_sound.mimes' => 'กรุณาใส่ไฟล์เสียง สกุล mp3'];
    }
}
