<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StartDiscTestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validation Rules
     */
    public function rules(): array
    {
        return [
            'participant_name' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer', 'between:10,100'],
            'gender' => ['required', 'in:L,P'],
        ];
    }

    public function messages(): array
    {
        return [
            'participant_name.required' => 'Nama wajib diisi.',
            'age.required' => 'Usia wajib diisi.',
            'age.integer' => 'Usia harus berupa angka.',
            'age.between' => 'Usia tidak valid.',
            'gender.required' => 'Jenis kelamin wajib dipilih.',
            'gender.in' => 'Jenis kelamin tidak valid.',
        ];
    }
}