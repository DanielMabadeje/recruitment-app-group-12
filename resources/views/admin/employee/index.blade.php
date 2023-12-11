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
                            <h4>Employees</h4>
                        </div>
                        <div class="QA_table ">

                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                <table class="table lms_table_active dataTable no-footer dtr-inline"
                                    id="listTable" role="grid" aria-describedby="DataTables_Table_0_info"
                                    style="width: 1045px;">
                                    <thead>
                                        <tr role="row">
                                            <th scope="col" class="sorting_asc" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                style="width: 76px;" aria-sort="ascending"
                                                aria-label="title: activate to sort column descending">Username</th>
                                            <th scope="col" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                style="width: 116px;"
                                                aria-label="Category: activate to sort column ascending">Full Name</th>
                                            <th scope="col" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                style="width: 110px;"
                                                aria-label="Teacher: activate to sort column ascending">Role</th>
                                            <th scope="col" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                style="width: 110px;"
                                                aria-label="Teacher: activate to sort column ascending">Job Title</th>
                                            <th scope="col" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                style="width: 108px;"
                                                aria-label="Lesson: activate to sort column ascending">Email</th>
                                            <th scope="col" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                style="width: 75px;"
                                                aria-label="Enrolled: activate to sort column ascending">Phone Number
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($employees as $key => $employee)
                                        <tr role="row" class="odd">
                                            <th scope="row" tabindex="0" class="sorting_1"> <a href="#"
                                                    class="question_content">{{$employee->user->name}}</a></th>
                                            <td>{{$employee->user->getFullName()}}</td>
                                            <td>{{$employee->user->role->name}}</td>
                                            <td>{{$employee->position}}</td>
                                            <td>{{$employee->user->email}}</td>
                                            <td>{{$employee->user->phone_no}}</td>
                                            {{-- <td>$25.00</td>
                                            <td><a href="#" class="status_btn">Active</a></td> --}}
                                        </tr>

                                        @empty
                                            No Employee Yet
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