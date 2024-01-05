@extends('masterLayout')
@section('content')
    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div style="width:100%; padding-bottom:35px;">
                    <h2>Projects</h2>
                    <hr />
                </div>
                <div class="col">
                    @foreach ($projects as $project)
                        <!-- Card -->
                        <div class='card px-3'>
                            <span class='fa-stack'>
                                <span class='hexagon'></span>
                                <i class='fas fa-chart-pie fa-stack-1x'></i>
                            </span>
                            <div class='card-body'>
                                <a style='text-decoration:none;'
                                    href="{{ route('project_detail', ['id' => $project->id]) }}">
                                    <h4 class='card-title'>{{ $project->title }}</h4>
                                </a>
                                <p>By <b>{{ $project->user->fullname }}</b> at {{ $project->year }}</p>
                                <span class="badge badge-{{ $project->status_def[1] }}">{{ $project->status_def[0] }}</span>
                            </div>
                        </div>
                        <!-- end of card -->
                    @endforeach
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->
@endsection
