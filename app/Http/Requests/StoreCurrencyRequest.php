<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurrencyRequest extends FormRequest
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
            'title' => 'required|max:255',
            'short_name' => 'required|min:2|max:10',
            'logo_url' => 'required|url',
            'price' => 'required|numeric|min:0'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'short_name.required' => 'The short name field is required.',
            'logo_url.required' => 'The logo url field is required.',
            'price.required' => 'The price field is required.',
            'logo_url.url' => 'The logo url format is invalid.',
            'price.numeric' => 'The price must be a number.',
            'price.min' => 'The price must be at least 0.'
        ];
    }
}
