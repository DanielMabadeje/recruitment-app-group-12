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
                            <h4>Users</h4>
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
                                <div class="add_button ms-2">
                                    <a href="{{route('admin.users.create')}}"  class="btn_1">Add
                                        New User</a>
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
                                        @forelse($users as $key => $user)
                                        <tr role="row" class="odd">
                                            <th scope="row" tabindex="0" class="sorting_1"> <a href="#"
                                                    class="question_content">{{$user->name}}</a></th>
                                            <td>{{$user->getFullName()}}</td>
                                            <td>{{$user->role->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone_no}}</td>
                                        </tr>

                                        @empty

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