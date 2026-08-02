<?php

namespace App\Http\Controllers;

use App\Contracts\ResumeUploader;
use App\Exceptions\ResumeUploadException;
use App\Http\Requests\CareerApplicationRequest;
use App\Models\CareerApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class CareerApplicationController extends Controller
{
    public function __construct(private readonly ResumeUploader $uploader) {}

    public function store(CareerApplicationRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        try {
            $result = $this->uploader->upload($request->file('resume'));
        } catch (ResumeUploadException $e) {
            return back()->withInput()->with('error', $e->getMessage());
        }

        try {
            DB::transaction(function () use ($validated, $result): void {
                CareerApplication::create([
                    'name' => $validated['name'],
                    'email' => $validated['email'],
                    'phone' => $validated['phone'] ?? null,
                    'position' => $validated['position'],
                    'experience' => $validated['experience'],
                    'message' => $validated['message'] ?? null,
                    'resume_url' => $result->secureUrl,
                    'resume_public_id' => $result->publicId,
                    'resume_original_name' => $result->originalName,
                    'resume_size' => $result->size,
                ]);
            });
        } catch (Throwable $e) {
            $this->uploader->delete($result->publicId);

            Log::error('Failed to persist career application.', [
                'email' => $validated['email'],
                'exception' => $e,
            ]);

            return back()->withInput()->with('error', 'Something went wrong while submitting your application. Please try again.');
        }

        return back()->with('success', 'Application submitted successfully! We will review your application and get back to you.');
    }
}
