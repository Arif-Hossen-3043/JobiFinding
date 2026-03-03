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
        <a href="/jobs/{{ $job->id }}/edit">Edit Jobs </a> 
 
        {{-- akta specifi id er against a amk edit a jete hbe normlly /jobs/{id}/jobs dile hbe na  --}}
        {{-- karon {id} ata just route er string jeta mean kore route amon hbe but data asvbe database theke  {{ id }} ai blade variabel dia jeta real value --}}
    </div>

</x-layout>
