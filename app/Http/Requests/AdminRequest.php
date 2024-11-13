<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // $uniqueEmail = 'unique:user';
        return [
            'product_name' => 'required|string|min:5',
            'product_price' => 'required|numeric|min:0',
            // 'username'=>'required|string|min:5',
            // 'email' => 'required|email|'.$uniqueEmail,
            'category' => 'required|in:1,2', 
        ];
    }

    public function messages()
    {
        return [
            'product_name.required' => 'Tên sản phẩm là trường bắt buộc.',
            'product_name.min' => 'Tên sản phẩm phải chứa ít nhất 5 ký tự.',

            // 'username.required' => 'Tên sản phẩm là trường bắt buộc.',
            // 'username.min' => 'Tên sản phẩm phải chứa ít nhất 5 ký tự.',

            // 'email.required' => 'bat buoc phai nhap',
            // 'email.email' => 'Khong dung dinh dang',
            // 'email.unique' => 'email da ton tai',

            'product_price.required' => 'Giá sản phẩm là trường bắt buộc.',
            'product_price.numeric' => 'Giá sản phẩm phải là một số.',
            'product_price.min' => 'Giá sản phẩm phải lớn hơn hoặc bằng 0.',

            'category.required' => 'Loại sản phẩm là trường bắt buộc.',
            'category.in' => 'Loại sản phẩm không hợp lệ.',
            
            'product_image.required' => 'Hình ảnh sản phẩm là trường bắt buộc.',
            'product_image.image' => 'Hình ảnh sản phẩm phải là một hình ảnh.',
           
        ];
    }
    
    
}

