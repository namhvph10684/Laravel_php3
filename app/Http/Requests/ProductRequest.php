<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            // 'price','thumbnail_url','quantity','status','category_id', 'size'
            'name'=>'required|min:3|max:70',
            'description'=>'required|max:200',
            'short_description'=>'required|max:100',
            'price'=>'required',
            'quantity'=>'required',
            'status'=>'required',
            'category_id'=>'required',
            'size'=>'required',

        ];
    }

    public function messages(){
        return [

            'name.required'=>'Tên sản phẩm  bắt buộc nhập',
            'name.min'=>'Tên sản phẩm cần nhập bắt buộc nhỏ nhất 3 kí tự',
            'name.max'=>'Tên sản phẩm được phép nhập tối đa 70 kí tự',
            'description.required'=>'Mô tả cho sản phẩm bắt buộc nhập',
            'description.max'=>'Mô tả bắt buộc nhập',
            'short_description.required'=>'Mô tả ngắn bắt buộc nhập',
            'short_description.max'=>'Mô tả ngắn nhập tối đa 100 kí tự',
            'price.required'=>'Hãy chọn giá',
            'quantity.required'=>'Hãy chọn số lượng',
            'status.required'=>'Hãy chọn trạng thái',
            'category_id.required'=>'Hãy chọn danh mục',
            'size.required'=>'Hãy chọn kích thước'
        ];
    }
}
