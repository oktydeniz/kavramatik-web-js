<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShapeRequest extends FormRequest
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
            'shape_name' => 'min:2|max:100',
            'shape_text' => 'min:2|max:100',
            'shape_two_text' => 'nullable|min:2|max:100',
            'shape_image' => 'image|mimes:jpg,jpeg,png|max:300',
            'shape_two_image' => 'nullable|image|mimes:jpg,jpeg,png|max:300'
        ];
    }
    public function attributes()
    {
        return [
            'shape_name'=>'Renk İsmi',
            'shape_text'=>'Renk İçerik Yazısı',
            'shape_image'=>'Renk Resmi',
            'shape_two_text'=>'Renk Resmi 2 Metni ',
            'shape_two_image'=>'Renk Resmi 2 ',
        ];
    }
}