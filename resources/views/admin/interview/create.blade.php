@extends('layouts.admin.app')

@section('content')

<section class="main_content dashboard_part">

    @include('layouts.admin.topheader')

    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header p-md-4">
                            <h4>Schedule Interview</h4>
                        </div>
                        <div class="QA_table ">
                            <form action="{{route('admin.interviews.store')}}" method="POST">
                                @csrf
                                <div class="form-group px-md-4 py-md-2">
                                    {{-- <label for="formGroupExampleInput">Job Id</label> --}}
                                    <input type="hidden" name="job_id" value="{{$job->id}}" class="form-control" id="formGroupExampleInput" placeholder="Job Title" required>
                                </div>

                                <div class="form-group px-md-4 py-md-2">
                                    {{-- <label for="formGroupExampleInput">User Id</label> --}}
                                    <input type="hidden" name="user_id" value="{{$applicant->user->id}}" class="form-control" id="formGroupExampleInput" placeholder="Job Title" required>
                                </div>
                                  <div class="form-group px-md-4 py-md-2">
                                    <label for="formGroupExampleInput2">Applicant's Name</label>
                                    <input type="text" name="application_id" value="{{$applicant->user->getFullName()}}" class="form-control" id="formGroupExampleInput" placeholder="Job Title" required>
                                  </div>

                                  <div class="form-group px-md-4 py-md-2">
                                    {{-- <label for="formGroupExampleInput2">applicant id</label> --}}
                                    <input type="hidden" value="{{$applicant->id}}" class="form-control" id="formGroupExampleInput" placeholder="Job Title" required>
                                  </div>

                                  <div class="form-group px-md-4 py-md-2">
                                    <label for="formGroupExampleInput2">Interview Date</label>
                                    <input type="date" name="interview_date" class="form-control" id="formGroupExampleInput2" placeholder="Deadline" required>
                                  </div>

                                  <div class="form-group px-md-4 py-md-2">
                                    <button type="submit" class="btn btn-primary">Schedule Interview</button>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.admin.dashboardfooter')
</section>
@endsection