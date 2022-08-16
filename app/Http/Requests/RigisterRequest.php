<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RigisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'password_confirmation'=>'required',
            'name'=>'required|min:2|max:50',
            'email' => 'required|email|min:6|max:50',
            'password' => 'required|min:6'
            //
        ];
    }

    public function messages(){
        return [

            'password_confirmation.required'=>'Nhập lại mật khẩu',
            'name.required'=>'Họ tên bắt buộc nhập',
            'name.min'=>'Họ tên cần nhập bắt buộc trên 2 kí tự',
            'name.max'=>'Họ tên có thể nhập tối đa 50 kí tự',
            'email.required' => 'Email bắt buộc nhập',
            'email.email' => 'Email phải đúng định dạng',
            'email.min' => 'Email tối thiểu 6 ký tự',
            'email.max' => 'Email tối đa 50 ký tự',
            'password.required' => 'Mật khẩu bắt buộc nhập',
            'password.min' => 'Mật khẩu tối thiểu 6 ký tự'
        ];
    }
}
