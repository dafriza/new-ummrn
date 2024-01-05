@extends('masterLayout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-3">
                    <div class="card-header">
                        <h2>Community Detail</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>
                                                Nama
                                            </th>
                                            <th>
                                                Keahlian
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cops_detail->member as $cops)
                                            {{-- {{dd($cops['fullname'])}} --}}
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>
                                                    {{ $cops['fullname'] }}
                                                </td>
                                                <td>
                                                    {{ $cops['keahlian'] }}
                                                </td>
                                                <td>
                                                    {{ $cops['email'] }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <h4>Dosen : {{ $cops_detail->author_lecture->fullname }}</h4>
                                <h5>Community Posts</h5>
                                @foreach ($posts as $post)
                                    <div class="card my-3">
                                        <div class="card-header">
                                            {{ $post->title }}
                                        </div>
                                        <div class="card-body">
                                            {{ $post->description }}
                                        </div>
                                    </div>
                                @endforeach
                                {{ $posts->links() }}
                                <a class="btn btn-success" style="text-decoration: none" href="{{ route('cops') }}">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
