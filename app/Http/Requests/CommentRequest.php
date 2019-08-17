<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
             'product_id' => 'required',
            'user_id' => 'required',
            'content' => 'required',
            
        ];
    }
     public function messages(){
        return [
                'product_id.required' => 'Yêu cầu nhập id',
                'user_id.required' => 'Yêu cầu là id',
                'content.required' => 'nhập nội dung'
        ];
    }
}
