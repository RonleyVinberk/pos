<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuppliersRequest extends FormRequest
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
            'is_active' => 'boolean|nullable',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'nullable',
            'province_id' => 'required',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'is_active' => 'Is Active',
            'name' => 'Name',
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'province_id' => 'Province Name'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages()
    {
        return [
            'name.required' => ':attribute can\'t be blank!',
            'address.required' => ':attribute can\'t be blank!',
            'phone.required' => ':attribute can\'t be blank!',
            'province_id.required' => 'Please choose :attribute!'
        ];
    }
}