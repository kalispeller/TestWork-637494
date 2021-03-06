<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class NewTokenRequest extends FormRequest
{
    public function authorize()
    {
        if (!Auth::check()) {
            abort(403);
        }

        return true;
    }

    public function rules()
    {
        return [
            'user_id' => 'int|exists:users,id'
        ];
    }
}
