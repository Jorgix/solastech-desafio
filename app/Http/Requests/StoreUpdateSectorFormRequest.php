<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateSectorFormRequest extends FormRequest
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
            'Sigla' => [
                'required',
                'string',
                'min:2',
                'max:10',
            ],
            'DescSetor' => [
                'required',
                'string',
                'min:5',
                'max:60'
            ]
        ];
    }
}
