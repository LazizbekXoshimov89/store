<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoriesCreateRequest extends FormRequest
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
        return [
            "title"=> "required|string|min:3",
        ];
    }
    public function messages(){
        return [
            "title.required"=>"kategoriya kiritilmadi",
            "title.string"=>"kategoriya string bo'lishi kerak!",
            "title.min:3"=>"kategoriya kamida 3 belgidan iborat bo'lishi kerak!",

        ];
    }
}
