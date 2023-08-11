<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncreaseLinkByCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'category' => 'required|in:geo,movies,word'
        ];
    }
}
