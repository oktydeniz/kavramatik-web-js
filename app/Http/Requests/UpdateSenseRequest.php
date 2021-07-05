<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSenseRequest extends FormRequest
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
            'sense_name' => 'required|min:2|max:100',
            'sense_one_image_text' => 'required|min:2|max:100',
            'sense_two_image_text' => 'required|min:2|max:100',
            'sense_one_image' => 'nullable|image|mimes:jpg,jpeg,png|max:300',
            'sense_two_image' => 'nullable|image|mimes:jpg,jpeg,png|max:300',
        ];
    }

    public function attributes()
    {
        return [
            'sense_name' => 'Duyu İsmi',
            'sense_one_image_text' => 'Duyu Resmi Metni 1 ',
            'sense_two_image_text' => 'Duyu Resmi Metni 2 ',
            'sense_one_image' =>  'Duyu Resmi 1',
            'sense_two_image' => 'Duyu Resmi 2 ',
        ];
    }
}
