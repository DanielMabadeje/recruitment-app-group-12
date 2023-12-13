@extends('layouts.admin.app')

@section('content')

<section class="main_content dashboard_part">

    @include('layouts.admin.topheader')

    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>{{$applicant->user->getFullName()}}'s Application</h4>
                        </div>
                        <div class="view-box">
                            <div class="cover">
                                <h4>Cover Letter</h4>
                                <div class="cover_letter">
                                    {!! $applicant->cover_letter !!}
                                </div>
                            </div>

                            <div class="col-md-5 ml-md-auto text-right my-4">
                                {{-- {{dd($applicant->id)}} --}}
                                <a href="{{route('admin.call-for-interview', ['job'=>$applicant->job, 'applicant'=>$applicant])}}" class="btn btn-primary">Call For Interview</a>
                                <a href="{{route('admin.destroy.applicants', $applicant)}}" class="btn btn-danger">Delete Application</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.admin.dashboardfooter')
</section>
@endsection