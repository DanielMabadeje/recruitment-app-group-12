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
                            <h4>Jobs</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="add_button ms-2">
                                    <a href="{{route('admin.jobs.create')}}"  class="btn_1">Add
                                        New Job</a>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table ">

                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                <table class="table lms_table_active dataTable no-footer dtr-inline"
                                    id="listTable" role="grid" aria-describedby="DataTables_Table_0_info"
                                    style="width: 1045px;">
                                    <thead>
                                        <tr role="row">
                                            <th scope="col" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                style="width: 110px;"
                                                aria-label="Teacher: activate to sort column ascending">Title</th>
                                            <th scope="col" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                style="width: 108px;"
                                                aria-label="Lesson: activate to sort column ascending">No Of Positions</th>
                                            <th scope="col" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                style="width: 75px;"
                                                aria-label="Enrolled: activate to sort column ascending">Application Deadline
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                style="width: 84px;"
                                                aria-label="Status: activate to sort column ascending">Status</th>

                                            <th scope="col" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                style="width: 84px;"
                                                aria-label="Status: activate to sort column ascending">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($jobs as $key => $job)
                                        <tr role="row" class="odd">
                                            <td>{{$job->title}}</td>
                                            <td>{{$job->no_of_positions}}</td>
                                            <td>{{$job->application_deadline}}</td>
                                            <td><a href="#" class="status_btn">{{$job->status}}</a></td>
                                            <td>View</td>
                                        </tr>

                                        @empty
                                            No Job Created Yet
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