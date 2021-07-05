<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateColorRequest extends FormRequest
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
            'color_name' => 'required|min:2|max:100',
            'color_text' => 'required|min:2|max:100',
            'color_image' => 'required|image|mimes:jpg,jpeg,png|max:300'
        ];

    }
    public function attributes()
    {
        return[
            'color_name'=>'Renk İsmi',
            'color_text'=>'Renk İçerik Yazısı',
            'color_image'=>'Renk Resmi',
        ];
    }
}
