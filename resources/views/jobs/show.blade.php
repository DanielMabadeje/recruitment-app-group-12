<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jobs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class=" overflow-hidden shadow-sm sm:rounded-lg col-md-12 card">
                <div class="p-6 ">
                    {{ $job->title }}
                </div>
                <div class="p-6 text-white">
                    {!! $job->description !!}
                </div>
                <div class="col-md-12 p-6">
                    <div class="col-5 ml-auto">
                        <x-primary-button><a href="{{route('job.apply.blade', $job)}}">Apply</a></x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>