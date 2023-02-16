@extends('layout.mainlayout')

@section('ictlr', 'active-icon')
@section('tlr', 'active')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <div class="d-flex">
                    <h4 class="my-4">Room Telur Detail :</h4>
                    <a href="/telur/" class="ms-auto mt-4 fs-3"><i class='bx bxs-chevron-left'></i></a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <hr class="my-4">
                        <div class="row justify-content-center ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">ID Telur :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $data->jenis_telur_id }}</label>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row justify-content-center ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Jenis Telur :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $jenis['nama'] }}</label>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row justify-content-center ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Harga :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $data->harga }}</label>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Stok :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $data->stok }}</label>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Status :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input"><div class="@if($data->status == '1')status status-benar @elseif( $data->status == '2')status status-pending @else status status-salah @endif"> @if($data->status == '1') Baik @elseif( $data->status == '2') Pecah @else Busuk @endif</div></label>
                            </div>
                        </div>
                        <hr class="my-4">  
            </div>
        </div>
    </div>
@endsection