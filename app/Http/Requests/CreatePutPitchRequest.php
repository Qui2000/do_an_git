<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePutPitchRequest extends FormRequest
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
            'ten_nguoi_dat' => 'required',
            'sdt_nguoi_dat' => 'required',
            'ngay_dat' => 'required',
            'tien_coc' => 'required',
            'ngay_coc_tien' => 'required',
            'so_tien_thanh_toan' => 'required',
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
