<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FotoRequest extends FormRequest
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
            //'foto_antes' => 'mimes:png,jpg',
            //'foto_despues' => 'mimes:png,jpg',
            //'foto_ot' => 'mimes:png,jpg',
            //'foto_boleta' => 'mimes:png,jpg',
        ];
    }
}
