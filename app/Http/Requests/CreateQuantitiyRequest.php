<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateQuantitiyRequest extends FormRequest
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
            'quantitiy_name' => 'required|min:2|max:100',
            'quantitiy_text' => 'required|min:2|max:100',
            'quantitiy_one_text' => 'required|min:2|max:100',
            'quantitiy_two_text' =>  'required|min:2|max:100',
            'quantitiy_one_image' => 'required|image|mimes:jpg,jpeg,png|max:300',
            'quantitiy_two_image' => 'required|image|mimes:jpg,jpeg,png|max:300',
        ];
    }
    public function attributes()
    {
        return [
            'quantitiy_name' => 'Miktar İsmi',
            'quantitiy_text' => 'Miktar Metni',
            'quantitiy_one_text' => 'Miktar 1 Metni',
            'quantitiy_two_text' =>  'Miktar 2 Metni',
            'quantitiy_one_image' => 'Miktar 1 Resmi',
            'quantitiy_two_image' => 'Miktar 1 Resmi',

        ];
    }
}
