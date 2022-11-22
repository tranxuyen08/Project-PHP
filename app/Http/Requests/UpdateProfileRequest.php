<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'phone' => ['required'],
            'city' => ['required', 'max:255'],
            'country' => ['required', 'max:255'],
            'address' => ['required', 'max:255'],
            'gender' => ['required', 'in:0,1'],
            'day_of_birth' => ['required', 'date'],
        ];
    }
}
