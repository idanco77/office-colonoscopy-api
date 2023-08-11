<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameLinkRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'category' => 'required|in:geo,word,movies',
            'link' => 'required|string',
        ];
    }
}
