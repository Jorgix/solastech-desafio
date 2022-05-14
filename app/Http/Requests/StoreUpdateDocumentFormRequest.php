<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateDocumentFormRequest extends FormRequest
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
            'title' => [
                'required',
                'string',
                'min:3',
                'max:40'
            ],
            'description' => [
                'required',
                'string',
                'min:3',
                'max: 255'
            ],
            'document' =>[
                'nullable',
                'file',
                'max:102400',
                'mimes:jpeg,png,doc,docs,pdf,pptx'
            ]
        ];
    }
}
