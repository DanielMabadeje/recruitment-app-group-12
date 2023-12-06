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
                            <h4>Create Job</h4>
                        </div>
                        <div class="QA_table ">
                            <form action="{{route('admin.jobs.store')}}" method="POST">
                                @csrf
                                <div class="form-group px-md-4 py-md-2">
                                    <label for="formGroupExampleInput">Title</label>
                                    <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Job Title" required>
                                </div>
                                  <div class="form-group px-md-4 py-md-2">
                                    <label for="formGroupExampleInput2">Description</label>
                                    <textarea class="form-control" name="description" id="editor" placeholder="Description of Job"></textarea>
                                  </div>

                                  <div class="form-group px-md-4 py-md-2">
                                    <label for="formGroupExampleInput2">Number Of Positions</label>
                                    <input type="number" name="no_of_positions" class="form-control" id="formGroupExampleInput2" placeholder="No Of positions" min="1" required>
                                  </div>

                                  <div class="form-group px-md-4 py-md-2">
                                    <label for="formGroupExampleInput2">Deadline of Submission</label>
                                    <input type="date" name="application_deadline" class="form-control" id="formGroupExampleInput2" placeholder="Deadline" required>
                                  </div>

                                  <div class="form-group px-md-4 py-md-2">
                                    <button type="submit" class="btn btn-primary">Add Job</button>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
        console.log( editor );
        } )
        .catch( error => {
        console.error( error );
        } );
    </script>
    @include('layouts.admin.dashboardfooter')
</section>
@endsection