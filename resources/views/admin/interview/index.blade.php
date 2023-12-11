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
                            <h4>Interviews</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table ">

                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                <table class="table lms_table_active dataTable no-footer dtr-inline"
                                    id="listTable" >
                                    <thead>
                                        <tr role="row">
                                            <th scope="col" class="sorting">Full Name</th>
                                            <th scope="col" class="sorting">Job Title</th>
                                            <th scope="col" class="sorting">Email</th>
                                            <th scope="col" class="sorting">Phone Number</th>
                                            <th scope="col" class="sorting">Status</th>
                                            <th scope="col" class="sorting">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($interviews as $key => $interview)
                                        <tr role="row" class="odd">
                                            <td>{{$interview->user->getFullName()}}</td>
                                            <td>{{$interview->job->title}}</td>
                                            <td>{{$interview->user->email}}</td>
                                            <td>{{$interview->user->phone_no}}</td>
                                            <td>{!! $interview->displayStatus() !!}</td>
                                            <td>
                                                <div class="d-flex">
                                                    @if($interview->applicant->isAccepted())
                                                    Applicant already Hired
                                                @elseif ($interview->applicant->isRejected())
                                                    Applicant Rejected
                                                @else
                                                <div class="d-flex">
                                                    <a href="{{route('admin.applicant.hire', $interview->applicant)}}" class="text-success m-2"><i class="fa fa-check"></i></a>
                                                    <a href="{{route('admin.applicant.reject', $interview->applicant)}}" class="text-danger m-2"><i class="fa fa-times"></i></a>
                                                </div>
                                                @endif
                                                </div>
                                            </td>
                                        </tr>

                                        @empty
                                            No Interviews Scheduled IDAN!!
                                        @endforelse
                                    </tbody>
                                </table>
                                
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