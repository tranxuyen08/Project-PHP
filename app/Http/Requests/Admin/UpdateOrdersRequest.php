<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrdersRequest extends FormRequest
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
            'user_id' => ['required'],
            'amount' => ['required'],
            'coupon_id' => ['required'],
            'status' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'User id is required',
            'amount.required' => 'amount is required',
            'coupon_id.required' => 'coupon id is required',
            'status.required' => 'status is required',
        ];
    }
}
