<?php

namespace app\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewApplicationRequest extends FormRequest
{
    public function rules()
    {
        return [
            'address' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:application_categories,id'
        ];
    }
}
