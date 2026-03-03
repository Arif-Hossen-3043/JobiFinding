<x-layout>
    <x-slot:heading>
        Update Job
    </x-slot>

    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-xl p-8 mt-10">

      <form method="POST" action="/jobs/{{ $job->id }}">
    @csrf
    @method('PATCH')

            <!-- Job Title -->
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                    Job Title
                </label>
                <input type="text" id="name" name="name"
                value="{{ $job->name }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                    placeholder="Enter job title">
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                    Description
                </label>
               <textarea 
    id="description" 
    name="description" 
    rows="4"
    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
    placeholder="Write job description"
>{{ $job->description }}</textarea>
{{-- text area er jno valuue kaj kore na  --}}
            </div>

            <!-- Salary -->
            <div class="mb-6">
                <label for="salary" class="block text-sm font-medium text-gray-700 mb-2">
                    Salary
                </label>
                <input type="number" id="salary" name="salary"
                value="{{ $job->salary }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                    placeholder="Enter salary range">
            </div>

            <!-- Buttons -->
            <div class="flex justify-end gap-4">
                <a href="/jobs" class="text-black-600 hover:text-black-800">
                    Cancel
                </a>
                <button type="submit"
                    class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition">
                    Update Job
                </button>
            </div>

        </form>


<form method="POST" action="/jobs/{{ $job->id }}" 
      onsubmit="return confirm('Are you sure?');">
    @csrf
    @method('DELETE')

    <button type="submit"
        class="mt-4 px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
        Delete Job
    </button>
</form>


    </div>
</x-layout>
