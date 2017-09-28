<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NDDRequest extends FormRequest
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
            'sdt' => 'required',
            'diachi' => 'required',
            'cmnd' => 'required',
            'noicap' => 'required',
            'selector2' => 'required',
        ];
    }
     public function messages()
    {
        return [
            'tenkh.required' => 'Vui lòng nhập tên người dùng điện',
            'sdt.required' => 'Vui lòng nhập số điện thoại',
            'diachi.required' => 'Vui lòng nhập tên loại điện sử dụng',
            'cmnd.required' => 'Vui lòng nhập chứng minh nhân dân',
            'noicap.required' => 'Vui lòng nhập nơi cấp',
            'email.email' => 'Vui lòng nhập đúng email',
        ];
    }
}
