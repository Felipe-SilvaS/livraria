<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAutor extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required | max:50 | min: 3',
            'pais' => 'required | max:30 | min: 4',
            'ano_nasc' => 'required | integer | size:4',
            'area' => 'required | max:50'
        ];
    }
}
