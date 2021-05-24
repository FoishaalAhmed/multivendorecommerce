<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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

            'type'  => 'string|required|max:255',
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [

                'photo' => 'mimes:jpeg,jpg,png,gif,webp|max:1999|required_if:type,Photo',
                'video' => 'required_if:type,Video|max:255',
                'title' => 'required_if:type,Video|max:255',
                'description' => 'required_if:type,Video',

            ];
        } else {

            return $rules + [

                'photo' => 'mimes:jpeg,jpg,png,gif,webp|max:1999',
                'video' => 'string|max:255|nullable',
                'title' => 'string|max:255|nullable',
                'description' => 'string|nullable',

            ];
        }
    }
}
