<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot>

    <h1>Jobs Page</h1>
    <p>Welcome to the job page!</p>

    @foreach ($jobs as $job)

        <h3>
            <a href="/jobs/{{ $job->id }}">
                <strong>Job Title :</strong> {{ $job->name }}
            </a>
        </h3>

        <h3>
            <strong>Job Salary :</strong> {{ $job->salary }}
        </h3>

        <h3>
            <strong>Job Description :</strong> {{ $job->description }}
        </h3>

        <hr>

    @endforeach

</x-layout>
