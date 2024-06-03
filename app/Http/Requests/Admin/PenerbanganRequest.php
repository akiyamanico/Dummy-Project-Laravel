<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PenerbanganRequest extends FormRequest
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
           'namadaerah' => 'required|string',
           'namabandara' => 'required|string',
        ];
    }
    public function messages(): array{
        return [
            'namadaerah.required' => 'Isikan Nama Daerah!',
            'namabandara.required' => 'Isikan Nama Bandara!',
        ];
    }
}
