@extends('layout.mainlayout')

@section('ictlr', 'active-icon')
@section('tlr', 'active')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card mt-5">
                <div class="card-body">
                    <form action="/telur/{{$telur->id}}" method="post">
                        @csrf
                        @method('put')
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Nama Jenis :</label>
                            <select name="jenis_telur_id" class="form-select">
                                <option value="" selected>---</option>
                                @foreach ($jenis as $jenisTelur)
                                <option value="{{$jenisTelur->id}}" @if($telur->jenis_telur_id == $jenisTelur->id) selected @endif >{{$jenisTelur->nama}}</option>
                                @endforeach
                              </select>
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Harga :</label>
                            <input type="hidden" class="form-control" id="">
                            <input type="number" value="{{$telur->harga}}" name="harga" class="form-control" id="">
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Stok :</label>
                            <input type="number" value="{{$telur->stok}}" name="stok" class="form-control" id="">
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Status :</label>
                            <select name="status" class="form-select">
                                <option value="" selected>---</option>
                                <option @if($telur->status == 1) selected @endif value="1">Baik</option>
                                <option @if($telur->status == 2) selected @endif value="2">Pecah</option>
                                <option @if($telur->status == 3) selected @endif value="3">Busuk</option>
                              </select>
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