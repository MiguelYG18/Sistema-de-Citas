<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDoctorRequest extends FormRequest
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
        $doctor = $this->route('doctor');
        return [
            'speciality_id' => 'required|integer|exists:specialities,id',
            'medical_license_number' => 'required|integer|max_digits:12|unique:doctors,medical_license_number,'.$doctor->id,
            'active' => 'required|boolean',
            'biography' => 'sometimes'
        ];
    }
}
