@extends('admin.layouts.app')

@section('title', 'Application - '.$application->name)

@section('content')
<a href="{{ route('admin.careers.index') }}" class="text-sm text-primary hover:underline">&larr; Back to applications</a>

<div class="mt-4 grid gap-6 lg:grid-cols-3">
    <div class="space-y-6 lg:col-span-2">
        <div class="rounded-xl border border-border bg-card p-6">
            <h1 class="text-2xl font-bold text-heading">{{ $application->name }}</h1>
            <p class="mt-1 text-sm text-muted">{{ $application->position }} &middot; {{ $application->experience }} years</p>

            <dl class="mt-6 grid gap-4 sm:grid-cols-2 text-sm">
                <div>
                    <dt class="text-xs uppercase tracking-wide text-muted">Email</dt>
                    <dd class="mt-1 text-heading">{{ $application->email }}</dd>
                </div>
                <div>
                    <dt class="text-xs uppercase tracking-wide text-muted">Phone</dt>
                    <dd class="mt-1 text-heading">{{ $application->phone ?? '—' }}</dd>
                </div>
                <div>
                    <dt class="text-xs uppercase tracking-wide text-muted">Status</dt>
                    <dd class="mt-1"><span class="rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">{{ $application->status }}</span></dd>
                </div>
                <div>
                    <dt class="text-xs uppercase tracking-wide text-muted">Received</dt>
                    <dd class="mt-1 text-heading">{{ $application->created_at->format('M j, Y g:i A') }}</dd>
                </div>
            </dl>

            @if($application->message)
            <div class="mt-6">
                <h2 class="text-sm font-semibold text-heading">Cover Letter</h2>
                <p class="mt-2 whitespace-pre-line text-sm text-text/90">{{ $application->message }}</p>
            </div>
            @endif
        </div>
    </div>

    <div>
        <div class="rounded-xl border border-border bg-card p-6">
            <h2 class="text-lg font-bold text-heading">Resume</h2>

            @if($application->hasResume())
                <dl class="mt-4 space-y-3 text-sm">
                    <div>
                        <dt class="text-xs uppercase tracking-wide text-muted">Name</dt>
                        <dd class="mt-1 text-heading break-all">{{ $application->resume_original_name }}</dd>
                    </div>
                    <div>
                        <dt class="text-xs uppercase tracking-wide text-muted">Size</dt>
                        <dd class="mt-1 text-heading">{{ $resumeSize ?? '—' }}</dd>
                    </div>
                </dl>

                <div class="mt-6 flex flex-col gap-2">
                    <a href="{{ route('admin.careers.resume.preview', $application) }}" target="_blank" class="rounded-full bg-primary px-4 py-2.5 text-center text-sm font-semibold text-white hover:bg-primary-hover transition-colors">Preview Resume</a>
                    <a href="{{ route('admin.careers.resume.download', $application) }}" class="rounded-full border border-border px-4 py-2.5 text-center text-sm font-semibold text-heading hover:bg-background transition-colors">Download Resume</a>
                    <form method="POST" action="{{ route('admin.careers.resume.destroy', $application) }}" onsubmit="return confirm('Delete this resume from Cloudinary?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full rounded-full border border-danger/30 px-4 py-2.5 text-sm font-semibold text-danger hover:bg-danger/10 transition-colors">Delete Resume</button>
                    </form>
                </div>
            @else
                <p class="mt-4 text-sm text-muted">No resume has been uploaded for this application yet.</p>
            @endif
        </div>
    </div>
</div>
@endsection
