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
                            <p class="mb-0 mt-2 ms-2 text-gray fs-sm"><i class="bi bi-question-circle me-1"></i> Syarat Ketentuan </p>
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