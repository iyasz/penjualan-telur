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
                            <input type="text" name="nama" class="form-control" autocomplete="off" id="">
                            <div id="tooltip" role="tooltip">
                                Ketika Nama Pemesanan Sudah Disubmit, <br> Dilarang kembali sebelum mengisi detail pesanan nya!
                                <div id="arrow" data-popper-arrow></div>
                            </div>
                            <p  class="mb-0 mt-2 ms-2 text-gray fs-sm"><i aria-describedby="tooltip" id="button" class="bi bi-question-circle me-1"></i> Syarat Ketentuan </p>
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