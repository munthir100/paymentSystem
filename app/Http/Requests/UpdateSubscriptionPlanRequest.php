<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubscriptionPlanRequest extends FormRequest
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
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'association_name' => 'sometimes|string|max:255',
            'status_id' => 'sometimes|exists:statuses,id',
            'prices.*.amount' => 'sometimes|numeric|min:0',
            'prices.*.duration' => 'sometimes|string|max:255',
            'features' => 'array',
            'features.*.name' => 'sometimes|string|max:255',
            'features.*.status_id' => 'sometimes|exists:statuses,id',
        ];
    }
}
