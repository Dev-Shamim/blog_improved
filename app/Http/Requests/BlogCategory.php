<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategory extends FormRequest
{
    public function authorize(): bool
    {
        // return {{ authorize_logic }};
        return true;
    }

    // public function rules(): array
    // {
    //     return [
    //         {{ rules }}
    //     ];
    // }

    public function rules(): array
    {
        return [
            "name"=> "required|string|max:255",
            // "slug"=> "required|string|max:255|unique:categories,slug",
            "parent_id"=> "nullable|exists:categories,id",
            "user_id"=> "nullable|exists:users,id",
            "description"=> "nullable|string|max:1000",
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
 
