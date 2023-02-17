@extends('layout.mainlayout')

@section('ictlr', 'active-icon')
@section('tlr', 'active')

@section('content')
    <div class="row">
        <div class="col-12 mt-4">
            <h2>Telur Room</h2>
            <div class="text-end">
                <a href="/telur/create" class="btn btn-primary ">Create Telur</a>
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
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="bi bi-funnel"></i> </button>
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
                                        <select name="filterPage" id="paginationFilter"
                                            class="form-select form-select-sm text-gray">
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
                    <table class="table mb-0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Jenis Telur</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white" id="tableSearch">
                            @foreach ($telur as $data)
                                <tr class="text-gray">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->jenis_telur['nama'] }}</td>
                                    <td>{{ $data->harga }}</td>
                                    <td>{{ $data->stok }}</td>
                                    <td><div class="@if ($data->status == 1) status status-benar @elseif($data->status == 2)status status-pending @else status status-salah @endif">
                                        @if ($data->status == 1)
                                        Baik
                                        @elseif($data->status == 2)
                                            Pecah
                                        @else
                                            Busuk
                                            @endif
                                        </div>
                                    </td>
                                    <td class="d-flex ">
                                        <a href="/telur/{{ $data->id }}/detail" type="submit" class="btn btn-danger btn-sm text-gray bg-transparent border-0 "><i class="bi bi-info-circle"></i></a>
                                        <form action="/telur/{{ $data->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm text-gray bg-transparent border-0 "><i class="bi bi-trash3"></i></button>
                                        </form>
                                            <a href="/telur/update/{{ $data->id }}"
                                                class="btn btn-primary btn-sm text-gray bg-transparent border-0"><i
                                class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="bg-white footer-table d-flex d-md-block d-lg-block justify-content-center">
                    <div class="pt-3 mx-0 mx-md-5 mx-lg-5">
                        {{ $telur->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
