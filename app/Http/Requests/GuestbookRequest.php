<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestbookRequest extends FormRequest
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
    'guest_name' => 'required',
    'guest_detail' => 'required', 
    ];
    }


    public function messages() {
    return [
    'guest_name.required' => 'กรุณากรอกชื่อ',
    'guest_detail.required' => 'กรุณากรอกความคิดเห็น'];

    }
}
