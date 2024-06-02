<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'username' => 'required|string',
           'password' => 'required|min:8',
        ];
    }
    public function messages(): array{
        return [
            'username.required' => 'Username atau Password Salah!',
            'password.min' => 'Username atau Password Salah!',
            'password.required' => 'Username atau Password Salah!',
        ];
    }
}
