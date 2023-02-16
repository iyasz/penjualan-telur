@extends('layout.mainlayout')
@section('ictr', 'active-icon')
@section('tr', 'active')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card mt-5">
                <div class="card-body">
                    <form action="/detail-transaksi/{{ $transaksi->id }}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('put')
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Status :</label>
                            <select name="status" class="form-select">
                                <option value="" selected>---</option>
                                <option @if($transaksi->status == 1) selected @endif value="1">Success</option>
                                <option @if($transaksi->status == 2) selected @endif value="2">Pending</option>
                                <option @if($transaksi->status == 3) selected @endif value="3">Canceled</option>
                            </select>
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Cara Bayar :</label>
                            <select disabled name="cara_bayar" class="form-select">
                                <option value="" selected>---</option>
                                <option value="1">Cash</option>
                                <option value="2">Transfer</option>
                            </select>
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Harga Total :</label>
                            <input type="text" class="form-control" disabled value="">
                            <input type="hidden" class="form-control" disabled value="" >
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Sejumlah :</label>
                            <input type="currency" id="rupiah" class="form-control" disabled>
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Kembalian :</label>
                            <input type="text" disabled class="form-control" >
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Bukti Transaksi :</label>
                            <input type="file" class="form-control" disabled name="bukti_trx">
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
