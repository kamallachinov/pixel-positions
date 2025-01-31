<x-layout>
    <x-page-heading>Search Results</x-page-heading>

    <div class="space-y-6">
        @if ($jobs->isNotEmpty())
            @foreach ($jobs as $job)
                <x-job-card-wide :$job />
            @endforeach
        @else
            <p class="text-gray-400 text-center text-lg">No jobs found.</p>
        @endif
    </div>
</x-layout>