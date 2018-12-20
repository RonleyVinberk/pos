<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProvincesRequest extends FormRequest
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
            'code' => 'required',
            'name' => 'required',
            'country_id' => 'required',
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
            'code' => 'Code',
            'name' => 'Name',
            'country_id' => 'Country',
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
            'code.required' => ':attribute can\'t be blank!',
            'name.required' => ':attribute can\'t be blank!',
            'country_id.required' => 'Please choose :attribute!',
        ];
    }
}