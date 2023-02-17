@extends('layout.mainlayout')

@section('icjns', 'active-icon')
@section('jns', 'active')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card mt-5">
                <div class="card-body">
                    <form action="/jenis-telur/{{$jenis->id}}" method="post">
                        @csrf
                        @method('put')
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Nama Jenis :</label>
                            <input type="text" value="{{$jenis->nama}}" name="nama" class="form-control  @error('nama') is-invalid @enderror" id="">
                            @error('nama') <p class="mb-0 text-danger fs-sm">{{$message}}</p> @enderror
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