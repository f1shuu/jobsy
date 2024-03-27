<x-layout>
    <x-slot:heading>
        Job listings
    </x-slot:heading>

    <ul>
        @foreach($jobs as $job)
            <li>
                <strong>{{ $job['title'] }}</strong>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 underline">
                    ->
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
