@extends('layout.mainlayout')

@section('tr', 'active')
@section('ictr', 'active-icon')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <div class="d-flex">
                    <h4 class="my-4">Nomor Transaksi : {{ $data->no_trx }}</h4>
                    <a href="/transaksi/" class="ms-auto mt-4 fs-3"><i class='bx bxs-chevron-left'></i></a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">No Transaksi :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $data->no_trx }}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Nama Lengkap Pemesanan :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $data->nama }}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Cara Bayar :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">
                                    @if ($data->cara_bayar == '1')
                                        CASH
                                    @else
                                        TRANSFER
                                    @endif
                                </label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Tanggal Transaksi :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ date("d M Y", strtotime($data->tgl_trx)) }}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Status :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input"><div class="@if($data->status == '1')status status-benar @elseif( $data->status == '2')status status-pending @else status status-salah @endif"> @if($data->status == '1') Success @elseif( $data->status == '2') Pending @else Canceled @endif</div></label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Total Masuk :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">Rp. {{ number_format($data->harga_total) }},00</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Senilai :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">Rp. {{ number_format($data->uang_masuk) }},00</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Kembalian :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">@if($data->kembalian < 0)Kurang  Rp. {{number_format($data->kembalian)}},00 @else  Rp. {{ number_format($data->kembalian) }},00 @endif</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Bukti Transaksi :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input"> <img src=" {{asset('storage/bukti-trx/'.$data->bukti_transaksi)}} " width="150px"></label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                    </div>
                </div>
                <h4 class="mt-5 mb-4">Transaksi Details :</h4>
                @foreach ($detail as $dataDetail)
                    
                <div class="card mt-3">
                    <div class="card-body">
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Telur :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $dataDetail->telur->jenis_telur->nama }}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Jumlah :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $dataDetail->jumlah }}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Harga Total :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">Rp. {{ number_format($dataDetail->total_detail) }},00</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection