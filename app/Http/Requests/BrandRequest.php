<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
