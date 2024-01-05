@extends('admin.masterLayout')
@section('content')
    <div class="row"></div>
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $user->fullname }}</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.user.update') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="{{$user->username}}">
                        </div>
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter fullname" value="{{$user->fullname}}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter fullname" value="{{$user->alamat}}">
                        </div>
                        <div class="form-group">
                            <label for="bidang_keilmuan">Bidang Keilmuan</label>
                            <input type="text" class="form-control" id="bidang_keilmuan" name="bidang_keilmuan" placeholder="Enter fullname" value="{{$user->bidang_keilmuan}}">
                        </div>
                        <div class="form-group">
                            <label for="keahlian">Keahlian</label>
                            <input type="text" class="form-control" id="keahlian" name="keahlian" placeholder="Enter fullname" value="{{$user->keahlian}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter fullname" value="{{$user->email}}">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
