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
            'fistname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password'=> 'required|min:6',
            'address' => 'required',
            
        ];
    }
    
    public function messages(){
        return [
                'fistname.required' => 'Yêu cầu nhập tên',
                'lastname.required'=> 'Nhập tên',
                'email.required'=> 'Nhập email',
                'email.email'=> 'Nhập đúng định dạng email',
                'password.required'=>'nhập password',
                'password.min'=> 'nhập ít nhất 6 kí tự',
                'address.required'=>'nhập địa chỉ',
        ];
    }
}
