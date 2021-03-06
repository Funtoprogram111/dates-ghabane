<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addProductRequest extends FormRequest
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
            'name' => 'required|string|max:150',
            'description' => 'required|string',
            'price' => 'required',
            'slug' => 'unique:products',
            'category_id' => 'required',
            'image'=>'required|image|mimes:png,jpg,jpeg,svg|max:10000',
        ];
    }
}
