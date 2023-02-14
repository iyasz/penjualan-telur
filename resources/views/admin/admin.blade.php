@extends('layout.mainlayout')

@section('icadm', 'active-icon')
@section('adm', 'active')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <h1>Admin Room</h1>
            <div class="text-end">
                <a href="/admin/create" class="btn btn-primary">Create Admin</a>
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
                        <th>Username</th>
                        <th>Password</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataAdmin as $admin)
                        
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$admin->nama}}</td>
                        <td>{{$admin->username}}</td>
                        <td>{{$admin->password}}</td>
                        <td class="d-flex ">
                            <form action="/admin/{{$admin->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            <a href="/admin/update/{{$admin->id}}" class="btn btn-primary btn-sm ">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
