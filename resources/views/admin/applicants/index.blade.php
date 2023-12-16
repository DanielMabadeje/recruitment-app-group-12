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
                            <h4>Applicants</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form active="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search content here...">
                                            </div>
                                            <button type="submit"> <i class="ti-search"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table ">

                            {{-- <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"> --}}
                                {{-- <table class="table lms_table_active dataTable py-4 table-responsive" id="listTable" > --}}
                                <table class="table py-4" id="listTable" >    
                                    <thead>
                                        <tr role="row">
                                            <th scope="col" class="sorting">Full Name</th>
                                            <th scope="col" class="sorting">Job Title</th>
                                            <th scope="col" class="sorting">Email</th>
                                            <th scope="col" class="sorting">Phone Number</th>
                                            <th scope="col" class="sorting">Status</th>
                                            <th scope="col" class="sorting">Status Action</th>
                                            <th scope="col" class="sorting">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($applicants as $key => $applicant)
                                        <tr role="row" class="odd">
                                            <td>{{$applicant->user->getFullName()}}</td>
                                            <td>{{$applicant->job->title}}</td>
                                            <td>{{$applicant->user->email}}</td>
                                            <td>{{$applicant->user->phone_no}}</td>
                                            <td>{!!$applicant->displayStatus()!!}</td>
                                            <td>
                                                @if($applicant->isAccepted())
                                                    Applicant already Hired
                                                @elseif ($applicant->isRejected())
                                                    Applicant Rejected
                                                @else
                                                <div class="d-flex">
                                                    <a href="{{route('admin.applicant.hire', $applicant)}}" class="text-success m-2"><i class="fa fa-check"></i></a>
                                                    <a href="{{route('admin.applicant.reject', $applicant)}}" class="text-danger m-2"><i class="fa fa-times"></i></a>
                                                </div>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{route('admin.applicants.show', $applicant)}}" class="  m-2"><i class="fa fa-eye"></i></a>
                                                    {{-- <a href="" class="btn btn-primary text-white m-2">Call for Interview</a> --}}
                                                    {{-- <a href="{{route('admin.destroy.applicants', $applicant)}}" class="text-danger m-2"><i class="fa fa-trash"></i></a> --}}
                                                </div>
                                            </td>
                                        </tr>

                                        @empty
                                            No Employee Yet
                                        @endforelse
                                    </tbody>
                                </table>
                                
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.admin.dashboardfooter')
</section>
@endsection