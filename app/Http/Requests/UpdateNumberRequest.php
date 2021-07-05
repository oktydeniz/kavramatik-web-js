<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNumberRequest extends FormRequest
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
            'number_name' => 'required|min:2|max:100',
            'number_one_text' => 'required|min:1|max:100',
            'number_one_image' => 'nullable|image|mimes:jpg,jpeg,png|max:300',
        ];
    }
    public function attributes()
    {
        return [
            'number_name' => 'Sayı İsmi',
            'number_one_text' => 'Sayı 1 Metni',
            'number_one_image' =>  'Sayı  1 Resmi',
        ];
    }
}
