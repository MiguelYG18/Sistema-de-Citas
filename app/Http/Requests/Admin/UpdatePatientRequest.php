<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientRequest extends FormRequest
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
            'blood_type_id'=>'sometimes|integer|exists:blood_types,id',
            'allergies' => 'sometimes',
            'chronic_conditions' => 'sometimes',
            'surgical_history' => 'sometimes',
            'family_history' => 'sometimes',
            'observations' => 'sometimes',
            'emergency_contact_name' => 'sometimes',
            'emergency_contact_phone' => 'sometimes|max_digits:9',
            'emergency_contact_relationship' => 'sometimes'
        ];
    }
}
