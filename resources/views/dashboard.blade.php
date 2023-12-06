<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="d-md-flex">
                <div class="bg-white col-md-4 m-1 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h2>{{ $jobscount }}</h2>
                        <p>Job Openings</p>
                    </div>
                </div>
                <div class="bg-white col-md-4 m-1 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h2>{{ $interviewscount }}</h2>
                        <p>Applications </p>
                    </div>
                </div>
                <div class="bg-white col-md-4 m-1 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h2>{{ $interviewscount }}</h2>
                        <p>Interviews Done</p>
                    </div>
                </div>
            </div>

            <div class="d-md-flex my-3">
                <div class="col-md-6 bg-white m-1 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-md-3">
                        <h2>Job Applications</h2>
                        <table class="table col-md-12 my-3">
                            @forelse($applicants as $key => $applicant)
                            <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Job Title</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Cover Letter</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{$applicant->job()->title}}</td>
                                    <td>Otto</td>
                                    <td>{{$applicant->cover_letter}}</td>
                                </tr>

                            </tbody>
                              @empty
                                <tr>
                                    <td>You have not applied for a job yet</td>
                                </tr>
                              @endforelse
                        </table>
                    </div>
                </div>
    
                <div class="col-md-6 bg-white m-1 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-md-3">
                        <h2>Interviews</h2>
                        <table class="table col-md-12 my-3">
                            @forelse ($interviews as $interview)
                            <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Job Title</th>
                                  <th scope="col">Last</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Interview Date</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>{{$interview->job()->title}}</td>
                                  <td>Otto</td>
                                  <td>{{$interview->status}}</td>
                                  <td>{{$interview->interview_date}}</td>
                                </tr>
                              </tbody>
                            @empty
                                <tr>
                                    <td>No Interview scheduled yet</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>

            <div class="py-12">
                <div class="py-3">
                    <h2>Job Openings</h2>
                </div>
                @forelse ($jobs as $job)
                        <div class="my-4 overflow-hidden shadow-sm sm:rounded-lg col-md-12 card">
                            <div class="p-6 text-gray-900">
                                {{ $job->title }}
                            </div>
                            <div class="col-md-12 p-6">
                                <div class="col-md-3 ml-auto">
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
    </div>
</x-app-layout>
