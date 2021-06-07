<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [

            'title'     => 'required|string|max:255',
            'category_id'  => 'required|numeric',
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [

                'photo' => 'mimes:jpeg,jpg,png,gif,webp|max:500|required',
                'slug'  => 'required|string|max:255|unique:blogs,slug',

            ];

        } else {

            return $rules + [

                'photo' => 'mimes:jpeg,jpg,png,gif,webp|max:500|nullable',
                'slug'  => 'required|string|max:15|unique:blogs,slug,' . $this->blog,
            ];
        }
    }
}
