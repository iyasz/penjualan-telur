@extends('layout.mainlayout')
@section('ictr', 'active-icon')
@section('tr', 'active')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card mt-5">
                <div class="card-body">
                    <form action="/transaksi" method="post">
                        @csrf
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Nama Lengkap Pemesanan :</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" autocomplete="off" id="">
                            @error('nama') <p class="mb-0 text-danger fs-sm">{{$message}}</p> @enderror
                            <p  class="mb-0 mt-2 ms-2 text-gray fs-sm"><i data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Ketika Nama Pemesanan Sudah Disubmit, Dilarang kembali sebelum mengisi detail pesanan nya!" id="button" class="bi bi-question-circle me-1"></i> Syarat Ketentuan </p>
                        </div>
                        <div class="text-end">
                            <button  name="submit" class="btn btn-primary">Buat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection