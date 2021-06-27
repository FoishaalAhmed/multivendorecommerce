<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [

            'link' => 'nullable|string|max:355',
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [
                'photo' => 'mimes:jpeg,jpg,png,gif,webp|max:5000|required',
            ];
        } else {

            return $rules + [
                'photo' => 'mimes:jpeg,jpg,png,gif,webp|max:5000|nullable',
            ];
        }
    }
}
