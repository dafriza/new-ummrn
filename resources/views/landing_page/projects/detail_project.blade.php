@extends('masterLayout')
@section('content')
    <div class="container">
        <div class="row">
            <div style="width:100%; padding-top:40px;">
                <h2>Project Detail</h2>
                <hr />
            </div>
            <div class="col-lg-3">
                <div class="text-container">
                    <div class='image-wrapper'>
                        <img class='img-fluid' style="height:200px; width:350px; margin-bottom:10px;"
                            src='{{asset('images/hexagon-green.svg')}}' alt='alternative'>
                    </div>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-9">
                {{-- {{dd($detailProject->title)}} --}}
                <h2>{!! $detailProject->title !!}</h2>
                <h6><i>{!! $detailProject->description !!}</i></h6>
                Publication: {!! $detailProject->created_at !!}<br />
                Status: <button class="btn btn-{{ $detailProject->status_def[1] }}">{{ $detailProject->status_def[0] }}</button><br />
                <p>Attachment: <a href='{!! $detailProject->attachment !!}'>{!! $detailProject->attachment !!}</a></p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
@endsection
