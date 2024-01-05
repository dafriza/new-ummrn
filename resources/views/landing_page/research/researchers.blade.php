@extends('masterLayout')
@section('content')
    <div class="basic-2" style="padding-top:45px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="text-align:left;">
                    <h2>Researchers</h2>
                    <hr />
                    @foreach ($researchers as $researcher)
                        <a href='{{ route('detail_researcher', ['id' => $researcher->id]) }}'>
                            <div class='team-member'>
                                <div class='image-wrapper'>
                                    <img class='img-fluid' src='{{ $researcher->foto }}' width=100 height=200
                                        alt='alternative'>
                                </div>
                                <p class='p-large'>{{ $researcher->fullname }}</p>
                                <p class='job-title'>{{ $researcher->bidang_keilmuan }}</p>
                            </div>
                        </a>
                    @endforeach
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of team -->
@endsection
