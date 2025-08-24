<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPost extends FormRequest
{
    public function authorize(): bool
    {
        // return {{ authorize_logic }};
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         {{ messages }}
    //     ];
    // }

    // public function attributes(): array
    // {
    //     return [
    //         {{ attributes }}
    //     ];
    // }
}
 
