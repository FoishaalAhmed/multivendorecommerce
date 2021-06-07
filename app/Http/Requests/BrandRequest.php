<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        $rules = [

            'name' => 'required|string|max:255',
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [
                'logo'    => 'mimes:jpeg,jpg,png,gif,webp|max:10000|required',
            ];
        } else {

            return $rules + [

                'logo'    => 'mimes:jpeg,jpg,png,gif,webp|max:10000|nullable',

            ];
        }
    }
}
