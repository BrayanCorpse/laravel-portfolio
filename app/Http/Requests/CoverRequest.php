<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoverRequest extends FormRequest
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
        if ($this->isMethod('PATCH')) {
            return [
                'url'  => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ];
        }
        return [
            'title' => 'required|unique:covers|max:255',
            'url'  => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    
    }
}
