<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot>

    <div class="max-w-6xl mx-auto px-6 py-10">

        <!-- Page Header -->
        <div class="mb-10 text-center">
            <h1 class="text-3xl font-bold text-gray-800">Available Jobs</h1>
            <p class="text-gray-500 mt-2">Find your perfect opportunity</p>
        </div>

        <!-- Jobs Grid -->
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($jobs as $job)
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 p-6 flex flex-col justify-between">

                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">
                            <a href="/jobs/{{ $job->id }}" class="hover:text-blue-600 transition">
                                {{ $job->name }}
                            </a>
                        </h3>

                        <p class="text-gray-600 mb-2">
                            <span class="font-medium">Salary:</span> {{ $job->salary }}
                        </p>

                        <p class="text-gray-500 text-sm mb-4 line-clamp-3">
                            {{ $job->description }}
                        </p>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <span class="text-sm text-gray-400">
                            {{ $job->employer->name ?? 'N/A' }}
                        </span>

                        <a href="/jobs/{{ $job->id }}"
                           class="text-sm px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                            View
                        </a>
                    </div>

                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-10">
            {{ $jobs->links() }}
        </div>

    </div>
</x-layout>