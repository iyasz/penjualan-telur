@extends('layout.mainlayout')

@section('icadm', 'active-icon')
@section('adm', 'active')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card mt-5">
                <div class="card-body">
                    <form action="/admin/{{$admin->id}}" method="post">
                        @csrf
                        @method('put')
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Nama :</label>
                            <input type="text" name="nama" value="{{$admin->nama}}" class="form-control @error('nama') is-invalid @enderror" id="">
                            @error('nama') <p class="mb-0 text-danger fs-sm">{{$message}}</p> @enderror
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Username :</label>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{$admin->username}}" id="">
                            @error('username') <p class="mb-0 text-danger fs-sm">{{$message}}</p> @enderror
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Password :</label>
                            <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="{{$admin->password}}" id="">
                            @error('password') <p class="mb-0 text-danger fs-sm">{{$message}}</p> @enderror
                        </div>
                        <div class="text-end">
                            <button name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection