@extends('masterLayout')
@section('content')
    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div style="width:100%; padding-bottom:25px;">
                    <h2>Communities of Practice</h2>
                    <hr />
                </div>
                <div class="col-lg-12">
                    <!-- Card -->
                    @foreach ($cops as $cop)
                        <div class='card'>
                            <span class='fa-stack'>
                                <span class='hexagon'></span>
                                <i class='fas fa-binoculars fa-stack-1x'></i>
                            </span>
                            <div class='card-body'>
                                <a style='text-decoration:none;' href='{{ route('cops_detail', ['id' => $cop->id]) }}'>
                                    <h4 class='card-title'>{{ $cop->title }}</h4>
                                </a>
                                <p>{{ $cop->description }}</p>
                                <p>Author: <br /><a style='text-decoration:none;'
                                        href='index.php?page=detilresearcher&id=$row[0]'>{{ $cop->author_lecture->fullname }}</a><br />
                                <p>Member:<br />
                                    {!! $cop->all_member !!}
                            </div>
                        </div>
                    @endforeach
                    <!-- end of card -->
                </div> <!-- end of col -->
                </a>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->
@endsection
