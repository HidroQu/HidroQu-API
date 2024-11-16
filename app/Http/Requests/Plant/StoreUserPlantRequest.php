<?php

namespace App\Http\Requests\Plant;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserPlantRequest extends FormRequest
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
            'plant_id' => 'required|integer|exists:plants,id',
            'planting_date' => 'required|date',
            'notes' => 'nullable|string|max:255',
        ];
    }
}
