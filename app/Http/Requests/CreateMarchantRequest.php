<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMarchantRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'identity_number' => 'required|string|max:255|unique:marchants,identity_number',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'iban' => 'required|string|max:34|unique:marchants,iban',
            'email' => 'required|string|email|max:255|unique:marchants,email',
            'commercial_registration_number' => 'required|string|max:255|unique:marchants,commercial_registration_number',
            'tax_number' => 'required|string|max:255|unique:marchants,tax_number',
            'commercial_registration_file' => 'required|file|mimes:pdf,doc,docx|max:1024',
            'tax_file' => 'required|file|mimes:pdf,doc,docx|max:10240',
        ];
    }
}
