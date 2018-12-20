<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StuffsRequest extends FormRequest
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
            'stock' => 'required',
            'price' => 'required',
            'type_stuff_id' => 'required'
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
            'name' => 'Name',
            'stock' => 'Stock',
            'price' => 'Price',
            'type_stuff_id' => 'Types Stuff'
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
            'stock.required' => ':attribute can\'t be blank!',
            'price.required' => ':attribute can\'t be blank!',
            'type_stuff_id.required' => ':attribute can\'t be blank!',
        ];
    }
}