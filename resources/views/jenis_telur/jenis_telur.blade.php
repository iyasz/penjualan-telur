@extends('layout.mainlayout')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <h1>Jenis Telur Room</h1>
            <div class="text-end">
                <a href="/jenis-telur/create" class="btn btn-primary">Create Jenis Telur</a>
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
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            <a href="/jenis-telur/update/{{$jenis_telur->id}}" class="btn btn-primary btn-sm ">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
