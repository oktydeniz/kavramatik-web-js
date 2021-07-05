<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDimensionRequest extends FormRequest
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
            'dimension_name' => 'required|min:2|max:100',
            'dimension_text' => 'required|min:2|max:100',
            'dimension_one_text' => 'required|min:2|max:100',
            'dimension_two_text' => 'required|min:2|max:100',
            'dimension_one_image' => 'nullable|image|mimes:jpg,jpeg,png|max:300',
            'dimension_two_image' => 'nullable|image|mimes:jpg,jpeg,png|max:300',
        ];
    }
    public function attributes()
    {
        return [
            'dimension_name' => 'Boyut İsmi',
            'dimension_text' => 'Boyut Metni',
            'dimension_one_text' => 'Karşılaştırma 1 Metni',
            'dimension_two_text' =>  'Karşılaştırma 2 Metni',
            'dimension_one_image' => 'Karşılaştırma 1 Resmi',
            'dimension_two_image' => 'Karşılaştırma 1 Resmi',

        ];
    }
}
