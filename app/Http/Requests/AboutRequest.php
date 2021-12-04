<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'title_about' => 'required | min:5 | max:64',
            'about' => 'required | min:5 | max:400',
            'file-about' => 'file | mimes:jpg,png|dimensions:min_width=100,min_height=200,max_width=500,max_height=500|max:512',
        ];
    }
}
