<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        return [
            'full_name' => 'required|regex:/^[A-zÀ-ú\s]+$/',
            'username' => 'required|regex:/^[A-z0-9.\S]+$/|unique:users,username',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:8',
            'valid_password' => 'required|same:password',
        ];
    }
}
