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
                    <form action="{{ route('motor.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="JenisMotor">Jenis Motor</label>
                            <textarea class="form-control" name="jenis_motor" placeholder="Ex Sport"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="NAMA">Plat Motor</label>
                            <input type="text" name="nomor_motor" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="NAMA">Merek Motor</label>
                            <input type="text" name="merek_motor" class="form-control" placeholder="">
                        </div>
                        <div class="form-group mt-2">
                            <a class="btn btn-info" title="Kembali" href=" {{ url('/motor') }}">
                                <i class="bi bi-arrow-left-square"> Kembali</i>
                            </a>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection