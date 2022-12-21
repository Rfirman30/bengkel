@extends('admin.master')

@section('content')
    <section>
        <div class="container mt-5">
            <h1> Service </h1>
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="NAMA">Nama Service</label>
                        <input type="text" name="nama_service" value="{{ $service->nama_service }}" class="form-control"
                            placeholder=""readonly>
                    </div>
                    <div class="form-group">
                        <label for=>Harga Service</label>
                        <input type="text" name="harga_service" value="{{ $service->harga_service }}"
                            class="form-control" placeholder=""readonly>
                    </div>

                    <div class="form-group mt-2">
                        <a class="btn btn-info" title="Kembali" href=" {{ url('/service') }}">
                            <i class="bi bi-arrow-left-square"> Kembali</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
