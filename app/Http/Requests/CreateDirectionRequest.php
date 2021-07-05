<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDirectionRequest extends FormRequest
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
            'direction_name' => 'required|min:2|max:100',
            'direction_text' => 'required|min:2|max:100',
            'direction_two_text' => 'nullable|min:2|max:100',
            'direction_image' => 'required|image|mimes:jpg,jpeg,png|max:300',
            'direction_two' => 'image|mimes:jpg,jpeg,png|max:300',
        ];
    }
    public function attributes()
    {
        return [
            'direction_name' => 'Yön İsmi',
            'direction_text' => 'Yön Metni',
            'direction_two_text' => 'Yön Resmi Metni 2',
            'direction_image' => 'Yön Resmi ',
            'direction_two' => 'Yön Resmi 2 ',
        ];
    }
}
