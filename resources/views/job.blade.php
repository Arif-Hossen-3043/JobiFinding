<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot>
    <h2>Job Title: {{ $job->name }}</h2>
    <h3>Salary: {{ $job->salary }}</h3>
    <p>Description: {{ $job->description }}</p>
    <a href="/jobs">Back to Jobs</a>
</x-layout>
