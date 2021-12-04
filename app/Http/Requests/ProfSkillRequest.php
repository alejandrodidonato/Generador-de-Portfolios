<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfSkillRequest extends FormRequest
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
            'name_profskill' => 'required | min:2 | max:64',
            'percent' => 'required | numeric| min:0 | max:100',
        ];
    }
}
