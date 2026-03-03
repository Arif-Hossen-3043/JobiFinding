<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot>

    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-xl p-8 mt-10">

        <form method="POST" action="/jobs"> 
            {{-- if the ob posted go to routes page to show the posts  --}}
            @csrf

            <!-- Job Title -->
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                    Job Title
                </label>
                <input type="text" id="name" name="name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                    placeholder="Enter job title">
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                    Description
                </label>
                <textarea id="description" name="description" rows="4"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                    placeholder="Write job description"></textarea>
            </div>

            <!-- Salary -->
            <div class="mb-6">
                <label for="salary" class="block text-sm font-medium text-gray-700 mb-2">
                    Salary
                </label>
                <input type="number" id="salary" name="salary"
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
                    Save Job
                </button>
            </div>

        </form>
    </div>
</x-layout>
