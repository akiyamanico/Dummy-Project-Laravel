<?php

namespace App\Http\Requests\Payment;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'telpon' => 'required|string',
            'tanggallahir' => 'required|string',
            'alamat' => 'required|string',
            'buktipembayaran' => 'required|mimes:jpg,png,jpeg',
        ];
    }


    public function message(): array
    {
        return[
            'nama.required' => 'Data Harus Diisikan!',
            'email.required' => 'Email Harus Diisikan',
            'email.email' => 'Pastikan Yang dimasukan berupa email!',
            'telpon.required' => 'Data Harus Diisikan',
            'tanggallahir.required' => 'Data Harus Diisikan',
            'alamat.required' => 'Data Harus Diisikan',
            'buktipembayaran.mimes' => 'Pastikan Format File Benar',
        ];
    }
}
