@extends('masterLayout')
@section('content')
    <div class="container p-5">
        <div class="row">
            <div style="width:100%;">
                <h2>Researcher Detail</h2>
                <hr />
            </div>
            <div class="col-lg-3">
                <div class="text-container">
                    <div class='image-wrapper' style="margin-bottom:10px;">
                        <img class='img-fluid' style="height:300px; width:250px;" src='{{$researcher->foto}}' alt='alternative'>
                    </div>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class='col-lg-9'>
                <h2>{{ $researcher->fullname }}</h2><br />
                <h4>Education:</h4>
                {!! $researcher->curriculum_vitae->all_educations !!}
                <h4 class="mt-2">Teaching Experinces:</h4>
                {!! $researcher->curriculum_vitae->all_work_experiences !!}
                <h4 class="mt-2">Organizational Experiences:</h4>
                {!! $researcher->curriculum_vitae->all_organizational_experiences !!}
                <h4 class="mt-2">Skills:</h4>
                {!! $researcher->curriculum_vitae->all_skills !!}
                <h4 class="mt-2">Awards:</h4>
                {!! $researcher->curriculum_vitae->all_awards !!}
                <h4 class="mt-2">Topics of Research:</h4>
                {!! $researcher->curriculum_vitae->all_topic_researchs !!}
                <h4 class="mt-2">Publications:</h4>
                {!! $researcher->curriculum_vitae->all_publications !!}
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
@endsection
