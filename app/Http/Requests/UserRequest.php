<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'description' => 'required | min:3 | max:20',
            'name' => 'required | min:2 | max:64',
            'title_job' => 'required | min:5 | max:64',
            'email' => 'required | min:5 | max:64',
            'tel' => 'nullable | numeric',
            'address' => 'nullable | min:5 |max:128',
            'file' => 'file | mimes:jpg,png|dimensions:min_width=200,min_height=200,max_width=500,max_height=500|max:512',
            'facebook' => 'nullable | max:100',
            'twitter' => 'nullable | max:100',
            'github' => 'nullable | max:100',
            'dribbble' => 'nullable | max:100',
        ];
    }
}
