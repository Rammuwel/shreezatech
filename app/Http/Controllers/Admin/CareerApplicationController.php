<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\ResumeUploader;
use App\Http\Controllers\Controller;
use App\Models\CareerApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CareerApplicationController extends Controller
{
    public function __construct(private readonly ResumeUploader $uploader) {}

    public function index(): View
    {
        return view('admin.careers.index', [
            'applications' => CareerApplication::latest()->paginate(20),
        ]);
    }

    public function show(CareerApplication $application): View
    {
        return view('admin.careers.show', [
            'application' => $application,
            'resumeSize' => $application->resume_size !== null
                ? $this->uploader->formatSize($application->resume_size)
                : null,
        ]);
    }

    public function download(CareerApplication $application): RedirectResponse
    {
        if (! $application->resume_url) {
            return back()->with('error', 'This application has no resume yet.');
        }

        $filename = (string) preg_replace('/\s+/', '-', $application->resume_original_name ?: 'resume');

        $url = (string) preg_replace(
            '#(/upload/)#',
            '$1fl_attachment:'.rawurlencode($filename).'/',
            $application->resume_url,
            1,
        );

        return redirect()->away($url);
    }

    public function preview(CareerApplication $application): RedirectResponse
    {
        if (! $application->resume_url) {
            return back()->with('error', 'This application has no resume yet.');
        }

        return redirect()->away($application->resume_url);
    }

    public function destroy(CareerApplication $application): RedirectResponse
    {
        if ($application->resume_public_id !== null) {
            $this->uploader->delete($application->resume_public_id);
        }

        $application->update([
            'resume_url' => null,
            'resume_public_id' => null,
            'resume_original_name' => null,
            'resume_size' => null,
        ]);

        return back()->with('success', 'Resume deleted.');
    }
}
