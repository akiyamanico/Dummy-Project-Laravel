<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username.required' => 'Username Harus Diisikan!',
            'password.min' => 'Minimal Password 8 Digit',
            'password.required' => 'Password Harus Diisikan!',
        ];
    }
}
