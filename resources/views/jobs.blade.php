<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot>

    <h1 class="text-2xl font-bold mb-4">Jobs Page</h1>
    <p class="mb-6">Welcome to the job page!</p>

    <div class="flex flex-wrap gap-6">
        @foreach ($jobs as $job)
            <div class="flex-1 min-w-[300px] max-w-md bg-white shadow-md rounded-lg p-4 border border-gray-200">
                
                <h3 class="text-lg font-semibold mb-2">
                    <a href="/jobs/{{ $job->id }}" class="text-blue-600 hover:underline">
                        Job Title: {{ $job->name }}
                    </a>
                </h3>

                <h3 class="mb-1"><strong>Salary:</strong> {{ $job->salary }}</h3>

                <h3 class="mb-2"><strong>Description:</strong> {{ $job->description }}</h3>

                <p class="text-sm text-gray-500 mt-2">
                    Employer: {{ $job->employer->name ?? 'N/A' }}
                </p>
            </div>
        @endforeach
    </div>
</x-layout>
