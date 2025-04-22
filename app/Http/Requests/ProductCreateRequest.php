<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            "category_id"=>"required|integer",
            "price"=>"required",
            "count"=>"required"
        ];
    }
    public function messages(){
        return [
            "title.required"=>"product kiritilmadi",
            "title.string"=>"product string bo'lishi kerak!",
            "title.min:3"=>"product kamida 3 belgidan iborat bo'lishi kerak!",
            "category_id.required"=>"kategoriya kiritilmadi",
            "price.required"=>"sotish narxi kiritilmadi",
            //"price.decimal"=>"sotish narxi bututn son b/'olishi kerak",
            "count.required"=>"product miqdori kiritilmadi"

        ];
    }
}
