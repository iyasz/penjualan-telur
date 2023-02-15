@extends('layout.mainlayout')
@section('ictr', 'active-icon')
@section('tr', 'active')
    
@section('content')
    <div class="row">
        <div class="col-12 mt-4">
            <h2>Transaksi Room</h2>
            <div class="text-end">
                <a href="/transaksi/create/pemesanan" class="btn btn-primary ">Create Transaksi</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="row">
            <div class="col-lg-4">
                <input type="text" id="liveSearch" class="form-control">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="parentTable">
                <div class="headerTable bg-white mb-0 mt-4">
                    <div class="dropdown text-end pt-4 me-4">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-funnel"></i> </button>
                        <ul class="dropdown-menu">  
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <div class="mx-3">
                                        <p class="mb-1 title-filter">Status</p>
                                        <select name="" class="form-select form-select-sm text-gray">
                                            <option selected disabled>---</option>
                                            <option value="1">Success</option>
                                            <option value="2">Pending</option>
                                            <option value="3">Canceled</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="mx-3">
                                        <p class="mb-1 title-filter">Per halaman</p>
                                        <select name="filterPage" id="paginationFilter" class="form-select form-select-sm text-gray">
                                            <option selected disabled>---</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </ul>
                      </div>
               
                </div>
                <div class="table-responsive">

                 <table class="table mb-0">
                    <thead>
                        <tr >
                        <th>#</th>
                        <th>No Invoice</th>
                        <th>Nama Pemesanan</th>
                        <th>Tanggal Transaksi</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="bg-white" id="tableSearch">
                    @foreach ($transaksi as $data)
                    
                    <tr class="text-gray">
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$data->no_trx}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{ date("d M Y", strtotime($data->tgl_trx)) }}</td>
                        <td class="d-flex ">
                                <a href="/transaksi/{{$data->id}}" type="submit" class="btn btn-danger btn-sm text-gray bg-transparent border-0 me-1"><i class="bi bi-info-circle"></i></a>
                            <a href="/transaksi/update/{{$data->id}}" class="btn btn-primary btn-sm text-gray bg-transparent border-0"><i class="bi bi-pencil-square"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <nav aria-label="...">
                <ul class="pagination">
                  <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="">1</a></li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="">Next</a>
                  </li>
                </ul>
              </nav> --}}
            </div>
            <div class="bg-white">
              <div class="pt-3 mx-5">
                  {{$transaksi->links()}}
              </div>
            </div>
        </div>
        </div>
    </div>
@endsection
               