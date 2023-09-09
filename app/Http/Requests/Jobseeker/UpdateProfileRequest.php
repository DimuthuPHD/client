<?php

namespace App\Http\Requests\Jobseeker;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

        return [];

        dd($this->all());
        return [
            'email' => 'required|email',
            'password' => 'required',
            'user_type' => 'required|in:job_seeker,consultant',
        ];
    }
}
