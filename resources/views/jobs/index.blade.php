<x-layout>
    <x-slot:heading>
        Job listings
     </x-slot:heading>

    <h1 class="font-bold text-lg">Jobs available:</h1>

    <div class="space-y-4">
        @foreach ($jobs as $job)

            <a href="jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-ly hover:bg-gray-200">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong class="text-laracasts">{{ $job['title'] }}:</strong>
                    pays {{ $job['salary'] }} per year.
                </div>
            </a>

        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>

    </div>

</x-layout>
