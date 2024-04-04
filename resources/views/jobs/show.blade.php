<x-layout>
    <x-slot:heading>
        Job details
    </x-slot:heading>

    <h1 class="font-bold text-xl">{{ $job['title'] }}</h1>
    <p>
        <strong>Salary per year:</strong> {{ $job['salary'] }}
        <a href="/jobs" class="text-blue-500 underline">
            back
        </a>
    </p>
</x-layout>
