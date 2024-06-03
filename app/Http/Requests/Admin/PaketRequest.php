<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PaketRequest extends FormRequest
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
           'namapaket' => 'required|string',
           'harga' => 'required|string',
           'deskripsi' => 'required|string',
           'tersedia' => 'required|string',
           'tanggalberangkat' => 'required|string',
           'asalkeberangkatan' => 'required|string',
        ];
    }
    public function messages(): array{
        return [
            'namapaket.required' => 'Isikan Data!',
            'harga.required' => 'Isikan Data!',
            'deskripsi.required' => 'Isikan Data!',
            'tersedia.required' => 'Isikan Data!',
            'tanggalberangkat.required' => 'Isikan Data!',
            'asalkeberangkatan.required' => 'Isikan Data!',
        ];
    }
}
