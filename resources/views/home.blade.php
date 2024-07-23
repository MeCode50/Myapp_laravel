<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li><strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per month</li>
        @endforeach
    </ul>
</x-layout>
