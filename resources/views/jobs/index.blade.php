<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jobs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @forelse ($jobs as $job)
                <div class="my-4 overflow-hidden shadow-sm sm:rounded-lg col-md-12 card">
                    <div class="p-6 text-gray-900">
                        {{ $job->title }}
                    </div>
                    <div class="col-md-12 p-6">
                        <div class="col-5 ml-auto">
                            {{-- <a href="" class="btn btn-secondary">View job</a> --}}
                            <x-secondary-button><a href="{{route('jobs.show', $job)}}">View Job</a></x-secondary-button>
                            <x-primary-button><a href="{{route('job.apply.blade', $job)}}">Apply</a></x-primary-button>
                        </div>
                    </div>
                </div>
            @empty
                <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        {{ __("No Jobs A this Time (Bring Deals)💔") }}
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>
