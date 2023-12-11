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
                                            <td><a href="#" class="status_btn">Active</a></td>
                                            <td>
                                                <div class="d-flex">
                                                    {{-- <a href="{{route('admin.interviews.show', $interview)}}" class="btn btn-primary text-white m-2">View</a> --}}
                                                    {{-- <a href="" class="btn btn-primary text-white m-2">Call for Interview</a> --}}
                                                    {{-- <a href="{{route('admin.destroy.interviews', $interview)}}" class="btn btn-danger text-white m-2">Delete</a> --}}
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