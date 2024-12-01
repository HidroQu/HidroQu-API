<?php

namespace App\Http\Requests\Diagnostic;

use Illuminate\Foundation\Http\FormRequest;

class StoreDiagnosticRequest extends FormRequest
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
            'user_plant_id' => 'required|exists:user_plants,id',
            'diagnostic_id' => 'required|exists:diagnostics,id',
            'diagnostic_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'diagnostic_date' => 'required|date',
        ];
    }
}
