<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name'    => 'required|string|max:255',
            'address' => 'nullable|string',
            'email'   => 'required|email|max:255|unique:users,email,' . auth()->user()->id,
            'phone'   => 'required|string|max:15|unique:users,phone,' . auth()->user()->id,
        ];
    }
}
