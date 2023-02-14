@extends('layout.mainlayout')

@section('icjns', 'active-icon')
@section('jns', 'active')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <h1>Jenis Telur Room</h1>
            <div class="text-end">
                <a href="/jenis-telur" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-12">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jenis as $jenis_telur)
                        
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$jenis_telur->nama}}</td>
                        <td class="d-flex ">
                            <form action="/jenis-telur/{{$jenis_telur->id}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm">Restore</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
