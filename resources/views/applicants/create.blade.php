<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jobs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{route('job.apply.post', $job->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Send Cover Letter</label>
                    <textarea class="form-control" name="message" id="editor" rows="5"></textarea>
                </div>

                <div class="form-group py-3">
                    <label for="exampleFormControlTextarea1">Resume</label>
                    <input type="file" class="" name="resume" id="">
                </div>
                <div class="form-group py-3">
                    {{-- <button type="submit" class="btn btn-primary">Apply for Job</button> --}}
                    <x-primary-button>Apply for Job</x-primary-button>
                </div>
            </form>
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
</x-app-layout>
