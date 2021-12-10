<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAccountRequest extends FormRequest
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
            'ten' => 'required',
            'ngay_sinh' => 'required',
            'dia_chi' => 'required',
            'sdt' => 'required|max:11',
            'gioi_tinh' => 'required',
            'quoc_tich' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute khong duoc bo trong!',
            'max' => ':attribute khong duoc qua :max ky tu!'
        ];
    }
}
