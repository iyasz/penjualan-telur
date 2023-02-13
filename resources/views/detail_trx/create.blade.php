@extends('layout.mainlayout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card mt-5">
                <div class="card-body">
                        <div class="mt-2 mb-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">Tambahkan Pesanan</button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail Pesanan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/detail-transaksi/{{$transaksi->id}}" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="mb-2">Jenis Telur :</label>
                                                    <select name="telur_id" class="form-select">
                                                        <option value="" selected>---</option>
                                                        @foreach ($jenis as $jenisTelur)
                                                            <option value="{{ $jenisTelur->id }}">{{ $jenisTelur->jenis_telur['nama'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Jumlah</label>
                                                    <input type="number" class="form-control" name="jumlah">
                                                </div>
                                                <div class="mb-3">
                                                    <label>Harga</label>
                                                    <input type="number" value="" class="form-control" >
                                                </div>
                                                <div class="mb-3">
                                                    <label>Total</label>
                                                    <input type="number" value="30" class="form-control" name="total_detail">
                                                </div>
                                                <div class="mb-3">
                                                    <button class="btn btn-primary" name="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table mt-4">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Jenis Telur</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detail as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->telur->jenis_telur['nama']}}</td>
                                        <td>{{$data->jumlah}}</td>
                                        <td>{{$data->total_detail}}</td>
                                       
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <form action="/transaksi/{{$transaksi->id}}" method="post">
                            @csrf
                            @method('put')
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Status :</label>
                            <select name="status" class="form-select">
                                <option value="" selected>---</option>
                                    <option value="1">Success</option>
                                    <option value="2">Pending</option>
                                    <option value="3">Canceled</option>
                            </select>
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Cara Bayar :</label>
                            <select name="cara_bayar" class="form-select">
                                <option value="" selected>---</option>
                                    <option value="1">Cash</option>
                                    <option value="2">Transfer</option>
                            </select>
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Harga Total :</label>
                            <input type="number" class="form-control" name="harga_total">
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Sejumlah :</label>
                            <input type="number" class="form-control" name="uang_masuk">
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Kembalian :</label>
                            <input type="number" class="form-control" name="kembalian">
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Bukti Transaksi :</label>
                            <input type="file" class="form-control" name="bukti_transaksi">
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
