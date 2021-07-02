<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        $rules = [

            'value' => 'required|string|max:255',
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [

                'name' => ['required', 'string', 'max: 255', 'unique:generals'],
            ];
        } else {

            return $rules + [

                'name' => ['required', 'string', 'max: 255'],
            ];
        }
    }
}
