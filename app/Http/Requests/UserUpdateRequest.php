<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name'=>'required|min:3|max:50',
            'email'=>'required|email',
            'phone'=>'required',
            'position'=>'required'
            

            //
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Tên người dùng bắt buộc phải nhập',
            'name.min'=>'Tên cần nhập tôi thiểu 3 kí tự',
            'name.max'=>'Tên được nhập tối đa 50 kí tự',
            'email.required'=>'Email bắt buộc phải nhập',
            'email.email'=>'Email nhập sai định dạng',
            'phone.required'=>'SĐT bắt buộc nhập',
            'position.required'=>'Quyền bắt buộc nhập'
        ];
    }
}
