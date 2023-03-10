<?php

namespace App\Http\Requests\User;

use App\Http\Requests\FormRequest;

class UserLoginRequest extends FormRequest
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
            'username' => ["required", "string", "min:5", "max:255"],
            'password' => ["required", "string", "min:5", "max:255"],
        ];
    }
}
