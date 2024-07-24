<x-layout>

<x-slot:heading>
        Jobs Page
    </x-slot:heading>
        <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs">
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per month
                </a>              
        </li>
        @endforeach
        </ul>

</x-layout>
