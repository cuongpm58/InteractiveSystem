<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserAddRequest extends Request
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
            'username' => 'required|unique:users,name', 'password' => 'required', 'level' => 'required', 'repassword' => 'required | same:password','fullname' => 'required', 'email' => 'required|unique:users,email', 'phone' => 'required', 'address' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'Vui lòng nhập Username',
            'username.unique' => 'Tên tài khoản đã tồn tại',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'repassword.required' => 'Vui lòng nhập  lại mật khẩu',
            'repassword.same' => 'Mật khẩu không trung khớp',
            'level.required' => 'Vui lòng chọn loại tài khoản',
            // 'bankname.required' => 'Vui lòng nhập tên ngân hàng',
            'fullname.required' => 'Vui lòng nhập họ tên',
            'email.required' => 'Vui lòng nhập email',
            'email.unique' => 'Email đã tồn tại',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'address.required' => 'Vui lòng nhập địa chỉ'
        ];
    }
}
