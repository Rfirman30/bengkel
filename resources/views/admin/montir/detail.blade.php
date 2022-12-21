@extends('admin.master')
@section('content')
    <div class="container mt-5">
        <h1>Data Montir</h1>
        <div class="form-group">
            <label>ID Montir</label>
            <input type="text" name="name" class="form-control" placeholder="id" value="{{$ar_montir->id}}"readonly>
        </div>

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" placeholder="nama" value="{{$ar_montir->name}}"readonly>
        </div>

        <div class="form-group">
            <label>Gender</label>
            <input type="text" name="name" class="form-control" placeholder="gender" value="{{$ar_montir->gender}}"readonly>
        </div>

        <div class="form-group">
            <label>No Telpon</label>
            <input type="text" name="name" class="form-control" placeholder="notelp" value="{{$ar_montir->no_telp}}"readonly>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="name" class="form-control" placeholder="alamat" value="{{$ar_montir->alamat}}"readonly>
        </div>

        <a class="btn btn-info" title="Kembali" href=" {{ url('/montir') }}">
            <i class="bi bi-arrow-left-square"> Kembali</i>
        </a>
    </div>

@endsection
