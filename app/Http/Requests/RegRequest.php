<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegRequest extends FormRequest
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
            'nama' => 'required|string',
            'email' => 'required|email',
            'username' => 'required|string',
            'nomortelp' => 'required|min:10',         
            'password' => 'required|min:8',
        ];
    }

    public function message(): array
    {
        return [
            'nama.required' => 'Data Harus Diisikan!',
            'email.required' => 'Email Harus Diisikan!',
            'email.email' => 'Pastikan Yang dimasukan berupa email!',
            'username.required' => 'Tidak bisa mendaftar tanpa username!',
            'nomortelp.min' => 'Pastikan Nomor Telfon Yang Anda Masukan Benar!',
            'password.min' => 'Minimal Password 8 Digit',
            'password.required' => 'Password Harus Diisikan!',
        ];
    }
}
