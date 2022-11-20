<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductsRequest extends FormRequest
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
            'photo' => ['required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name Is Required',
            'amount.required' => 'Amount Is Required',
            'category_id.required' => 'Category id Is Required',
            'photo.required' => 'Photo is Reqeuired',
        ];
    }
}
