@extends('layout.mainlayout')

@section('ictlr', 'active-icon')
@section('tlr', 'active')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <h1>Telur Room</h1>
            <div class="text-end">
                <a href="/telur/create" class="btn btn-primary">Create Telur</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-12">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Jenis Telur</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($telur as $data)
                        
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$data->jenis_telur['nama']}}</td>
                        <td>{{$data->harga}}</td>
                        <td>{{$data->stok}}</td>
                        <td>@if($data->status == 1)Baik @elseif($data->status == 2) Pecah @else Busuk @endif</td>
                        <td class="d-flex ">
                            <form action="/telur/{{$data->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            <a href="/telur/update/{{$data->id}}" class="btn btn-primary btn-sm ">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
               