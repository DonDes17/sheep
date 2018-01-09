<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Spendingrequest extends FormRequest
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
            'title' => 'required',
            'price' => 'required|not_in:0',
            'users' => 'required',
            'users.*' => 'numeric',
            'description' => 'required'

        ];
    }

   /* public function messages()
    {
        return [
            'title.required' => 'Titre obligatoire',
            'description.required'  => 'Description obligatoire',
            'price.required'  => 'Prix obligatoire',
        ];
    }*/
}
