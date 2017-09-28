<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestDangKyDien extends FormRequest
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
            'tenkh' => 'required',
            'cmnd' => 'required|max:9',
            'noicap' => 'required',
            'diachi' => 'required',
            'email' => 'required|email',
            'sdt' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'tenkh.required' => 'Tên khách hàng không được để trống',
            'cmnd.required' => 'Số CMND không được để trống',
            'cmnd.max' => 'Số CMND tối đa 9 ký tự',
            
            'noicap.required' => 'Nơi cấp không được để trống',
            'diachi.required' => 'Địa chỉ không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'sdt.required' => 'Số điện thoại không được để trống'
        ];
    }
}
