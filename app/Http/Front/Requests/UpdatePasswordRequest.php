<?php

namespace App\Http\Front\Requests;

use App\Domain\User\Rules\CurrentPasswordRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'current_password' => ['required',new CurrentPasswordRule($this->user())],
            'new_password' => 'required|confirmed',
            'new_password_confirmation' => 'required',
        ];
    }
}
