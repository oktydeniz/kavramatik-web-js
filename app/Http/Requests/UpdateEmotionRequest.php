<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmotionRequest extends FormRequest
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
            'emotion_name' => 'required|min:2|max:100',
            'emotion_text' => 'required|min:2|max:100',
            'emotion_image' => 'nullable|image|mimes:jpg,jpeg,png|max:1024',
        ];
    }
    public function attributes()
    {
        return [
            'emotion_name' => 'Duygu İsmi',
            'emotion_text' => 'Duygu İçerik Yazısı',
            'emotion_image' => 'Duygu Resmi',
        ];
    }
}
