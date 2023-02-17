@extends('layout.mainlayout')

@section('icadm', 'active-icon')
@section('adm', 'active')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <div class="d-flex">
                    <h4 class="my-4">Room Admin Detail :</h4>
                    <a href="/admin/" class="ms-auto mt-4 fs-3"><i class='bx bxs-chevron-left'></i></a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <hr class="my-4">
                        <div class="row justify-content-center ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">ID Admin :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $data->id }}</label>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row justify-content-center ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input"> Nama :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $data->nama }}</label>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row justify-content-center ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input"> Username :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $data->username }}</label>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row justify-content-center ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input"> Password :</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $data->password }}</label>
                            </div>
                        </div>
                        <hr class="my-4">  
            </div>
        </div>
    </div>
@endsection