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
     * @return array
     */
    public function rules()
    {
        return [
             'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'sale_percent'=> 'required',
            'stocks' => 'required',
            'is_active' => 'required',
            'cate_id' => 'required',
        ];
    }
     public function messages(){
        return [
                'name.required' => 'Yêu cầu nhập tên',
                'description.required' => 'Nhập mô tả',
                'price.required' => 'nhập giá',
                'sale_percent.required' => 'nhập giá khuyến mãi',
                'stocks.required' => 'nhập nguồn',
                'is_active.required' => 'nhập trạng thái',
                'cate_id.required' => 'nhập id danh mục',

        ];
    }
}
