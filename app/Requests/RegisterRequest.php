<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'email' => 'required|unique:users,email',
            'name' => 'required|regex:/^([A-Za-z.]+)$/|unique:users,name',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ];
    }
}
