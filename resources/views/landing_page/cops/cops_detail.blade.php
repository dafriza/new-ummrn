@extends('masterLayout')
@section('content')
    <div class="container">
        <div class="row">
            <div style="width:100%; padding-top:40px;">
                <h2>Community Detail</h2>
                <hr />
            </div>
            <div class="col-lg-9">
                <div class='text-container'>
                    <div class='image-wrapper'>
                        <img class='img-fluid' style='height:100px; width:200px; margin-bottom:10px;'
                            src='{{ asset('images/hexagon-green.svg') }}' alt='alternative'>
                    </div>
                </div>
                <h2>{{ $cops_detail->title }}</h2>
                <h6><i>{{ $cops_detail->description }}</i></h6>
                Publications : <br>{!! $cops_detail->author_lecture->curriculum_vitae->all_publications !!}
                <br>
                Status: <span
                    class="badge badge-{{ $cops_detail->status_def[1] }}">{{ $cops_detail->status_def[0] }}</span><br />
                <p>Attachment: <a href="{{ route('cops_pdf', ['name' => $cops_detail->attachment]) }}"
                        target="_blank">BPR</a></p>
                <form action="{{ route('cops_join_community') }}" method="post">
                    @csrf
                    <input type="hidden" name="community_id" value="{{ $cops_detail->id }}">
                    <button class="btn btn-success">Join Community</button>
                </form>
                <a class="btn btn-secondary mt-2" style="text-decoration: none"
                    href="{{ route('cops_community_group', ['id' => $cops_detail->id]) }}" target="_blank">Go
                    Community</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->
@endsection
