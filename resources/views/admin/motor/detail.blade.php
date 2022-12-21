@extends('admin.master')

@section('content')
    <section>
        <div class="container mt-5">
            <h1> Motor </h1>
            <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-lg-8">

                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id" class="form-control" value="{{ $motor->id }}"
                            placeholder="Ex 1"readonly>
                    </div>
                    <div class="form-group">
                        <label for="JenisMotor">Jenis Motor</label>
                        <textarea class="form-control" name="jenis_motor" placeholder="Ex Sport"readonly>{{ $motor->jenis_motor }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="NAMA">Nomor Motor</label>
                        <input type="text" name="nomor_motor" class="form-control" value="{{ $motor->nomor_motor }}"
                            placeholder=""readonly>
                    </div>
                    <div class="form-group">
                        <label for="NAMA">Merek Motor</label>
                        <input type="text" name="merek_motor" class="form-control" value="{{ $motor->merek_motor }}"
                            placeholder=""readonly>
                    </div>

                    <div class="form-group mt-2">
                        <a class="btn btn-info" title="Kembali" href=" {{ url('/motor') }}">
                            <i class="bi bi-arrow-left-square"> Kembali</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
