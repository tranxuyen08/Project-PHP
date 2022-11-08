<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductsRequest extends FormRequest
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
            'name' => ['required'],
            'amount' => ['required'],
            'category_id' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name is Reqeuired',
            'amount.required' => 'Amount is Reqeuired',
            'category_id.required' => 'Category id is Reqeuired',
        ];
    }
}
