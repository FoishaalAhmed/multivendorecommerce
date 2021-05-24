<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'name'         => 'string|required|max:255',
            'suitable_for' => 'string|required|max:255',
            'publish_year' => 'string|nullable|max:5',
            'author'       => 'string|nullable|max:255',
            
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [

                'photo'        => 'mimes:jpeg,jpg,png,gif,webp|max:1999|required',
                'pdf'          => 'mimes:pdf|max:19999|required',

            ];
        } else {

            return $rules + [

                'photo'        => 'mimes:jpeg,jpg,png,gif,webp|max:1999|nullable',
                'pdf'          => 'mimes:pdf|max:19999|nullable',

            ];
        }
    }
}
