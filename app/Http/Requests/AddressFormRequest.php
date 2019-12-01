<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressFormRequest extends FormRequest
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
            'lastname' => 'required|string',
            'firstname' => 'required|string',
            'country' => 'required|string',
            'state' => 'required|string',
            'PhoneNumber' => 'required',
            'address' => 'required|min:3|max:1000',
            'zipCode' => 'required|digits:5|integer',
        ];
    }
}
