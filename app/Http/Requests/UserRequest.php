<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'unique:users,name',
            'password' => 'min:6 |max:100',
            'repassword' => 'required|same:password',
            'email' => 'unique:users,email',
            'phone'=>'unique:phone_numbers,national_number',
            'user_imager'=>'nullable|image|max:3072 ',
            'phone'=>'min:9 |max :11',
            'street'=>'min:10 |max :1000'
        ];
    }
    public function messages()
    {
       return [
        'name.unique'=> "Thành viên đã tồn tại .",
        'repassword.same'=> "Mật khẩu không trùng khớp .",
        'email.unique'=> "Email đã tồn tại  .",
        'password.min'=> "Mật khẩu tối thiểu 6 ký tự .",
        'password.max'=> "Mật khẩu tối đa 100 ký tự .",
        'phone.unique'=>'Số điện thoại đã được sử dụng , vui lòng kiểm tra lại !!! ',
        'phone.min'=>'Số điện thoại tối thiểu 9 ký tự !!! ' ,
        'user_imager.image'=>'Hình ảnh không đúng định dạng !',
        'user_imager.max'=>'Hình ảnh tối đa 3MB .',
        'phone.max'=>'Số điện thoại tối đa 11 ký tự !!! ' ,
        'street.min'=>'Địa chỉ tối thiểu 10 ký tự !!! ' 
       ];
    }
}
