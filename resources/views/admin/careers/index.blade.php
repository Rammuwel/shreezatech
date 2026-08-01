@extends('admin.layouts.app')

@section('title', 'Career Applications')

@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold text-heading">Career Applications</h1>
    <span class="text-sm text-muted">{{ $applications->total() }} total</span>
</div>

<div class="overflow-hidden rounded-xl border border-border bg-card">
    <table class="w-full text-left text-sm">
        <thead>
            <tr class="border-b border-border text-xs uppercase tracking-wide text-muted">
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">Position</th>
                <th class="px-4 py-3">Experience</th>
                <th class="px-4 py-3">Email</th>
                <th class="px-4 py-3">Resume</th>
                <th class="px-4 py-3">Received</th>
                <th class="px-4 py-3 text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($applications as $application)
            <tr class="border-b border-border/60 last:border-0 hover:bg-background/40">
                <td class="px-4 py-3 font-medium text-heading">{{ $application->name }}</td>
                <td class="px-4 py-3">{{ $application->position }}</td>
                <td class="px-4 py-3">{{ $application->experience }}</td>
                <td class="px-4 py-3">{{ $application->email }}</td>
                <td class="px-4 py-3">
                    @if($application->hasResume())
                        <span class="text-success">{{ $application->resume_original_name }}</span>
                    @else
                        <span class="text-muted">—</span>
                    @endif
                </td>
                <td class="px-4 py-3 text-muted">{{ $application->created_at->format('M j, Y') }}</td>
                <td class="px-4 py-3 text-right">
                    <a href="{{ route('admin.careers.show', $application) }}" class="text-primary hover:underline">View</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="px-4 py-10 text-center text-muted">No applications yet.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-6">
    {{ $applications->links() }}
</div>
@endsection
