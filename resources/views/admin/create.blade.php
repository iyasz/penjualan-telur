@extends('layout.mainlayout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card mt-5">
                <div class="card-body">
                    <form action="/admin" method="post">
                        @csrf
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Nama :</label>
                            <input type="text" name="nama" class="form-control" id="">
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Username :</label>
                            <input type="text" name="username" class="form-control" id="">
                        </div>
                        <div class="mt-2 mb-3">
                            <label class="mb-2">Password :</label>
                            <input type="text" name="password" class="form-control" id="">
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