<x-layout>
    <x-slot:heading>
        Job details
    </x-slot:heading>

    <h1 class="font-bold text-xl">{{ $job->title }}</h1>
    <p>
        <strong>Salary per year:</strong> {{ $job->salary }}
        <a href="/jobs" class="text-blue-500 underline">
            back
        </a>
    </p>
    @can('edit', $job)
        <p class="mt-6">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit job listing</x-button>
        </p>
    @endcan
</x-layout>
