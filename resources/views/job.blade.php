<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot>

    <div class="flex justify-center items-center min-h-screen bg-gray-100 p-6">
        <div class="bg-white shadow-lg rounded-xl p-8 max-w-md w-full text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                Job Title: {{ $job->name }}
            </h2>
            <h3 class="text-lg text-gray-600 mb-4">
                Salary: {{ $job->salary }}
            </h3>
            <p class="text-gray-500 mb-6">
                Description: {{ $job->description }}
            </p>
            <a href="/jobs" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                ← Back to Jobs
            </a>
        </div>
    </div>
</x-layout>
