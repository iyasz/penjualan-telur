@extends('layout.mainlayout')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <h1>Transaksi Room</h1>
            <div class="text-end">
                <a href="/telur/create" class="btn btn-primary">Create Transaksi</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-12">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No Invoice</th>
                        <th>Nama Pemesanan</th>
                        <th>Status</th>
                        <th>Harga Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $data)
                        
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$data->no_trx}}</td>
                        <td>{{$data->nama}}</td>
                        <td>@if($data->status == 1)Baik @elseif($data->status == 2) Pecah @else Busuk @endif</td>
                        <td>{{$data->harga_total}}</td>
                        <td class="d-flex ">
                            <form action="/transaksi/{{$data->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            <a href="/transaksi/update/{{$data->id}}" class="btn btn-primary btn-sm ">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
               