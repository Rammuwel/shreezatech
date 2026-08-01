<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CareerApplicationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:100'],
            'email' => ['required', 'email', 'max:254'],
            'phone' => ['nullable', 'string', 'max:20'],
            'position' => ['required', 'string'],
            'experience' => ['required', 'string'],
            'message' => ['nullable', 'string', 'max:2000'],
            'resume' => [
                'required',
                'file',
                'mimes:'.implode(',', config('services.resume.allowed_extensions', ['pdf', 'doc', 'docx'])),
                'max:'.(int) ((config('services.resume.max_size') ?? 5 * 1024 * 1024) / 1024),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'resume.required' => 'Please attach your resume.',
            'resume.mimes' => 'Resume must be a PDF, DOC or DOCX file.',
            'resume.max' => 'Resume must not be larger than 5MB.',
        ];
    }
}
