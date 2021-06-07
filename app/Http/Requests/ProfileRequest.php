<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

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
