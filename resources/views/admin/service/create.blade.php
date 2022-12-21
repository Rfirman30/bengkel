@extends('admin.master')

@section('content')
    <section>
        <div class="container mt-5">
            <h1> Service </h1> 
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
                    <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="NAMA">Nama Service</label>
                            <input type="text" name="nama_service" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for=>Harga Service</label>
                            <input type="text" name="harga_service" class="form-control" placeholder="">
                        </div>
                        <div class="form-group mt-2">
                        <a class="btn btn-info" title="Kembali" href=" {{ url('/service') }}">
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