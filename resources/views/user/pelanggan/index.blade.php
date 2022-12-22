@extends('admin.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Pelanggan</h1>
        <p class="mb-4"></p>

        <!-- DataTables Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Table Pelanggan</h6>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Lengkapi Data
                </button>
                <div class="container rounded bg-white mb-5">
                    <div class="row">
                        <!-- <div class="col-md-3 ">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"></div>
                        </div> -->
                        <div class="col-md-5 ">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Data Pelanggan</h4>
                                </div>
                                <div class="row mt-5">
                                    <table>
                                        <tr>
                                            <td style="width: 200px">Nama Pelanggan</td>
                                            <td style="width: 40px">:</td>
                                            <td>{{ Auth::user()->name }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px">Nomor KTP</td>
                                            <td style="width: 40px">:</td>
                                            @if(!empty($data_pelanggan->no_ktp))
                                            <td>{{ $data_pelanggan->no_ktp }}</td>
                                            @else
                                            <td></td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td style="width: 200px">Alamat</td>
                                            <td style="width: 40px">:</td>
                                            @if(!empty($data_pelanggan->alamat_pelanggan))
                                            <td>{{ $data_pelanggan->alamat_pelanggan }}</td>
                                            @else
                                            <td></td>
                                            @endif
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- {{-- table --}}
                <div class="table-responsive">
                    <table class="table table-bordered" id="data-table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Nomor KTP</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div> -->

                
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Data Pelanggan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('add-pelanggan') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pelanggan</label>
                            <input type="text" class="form-control" name="nama_pelanggan"
                                value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No. KTP Pelanggan</label>
                            <input type="text" class="form-control" name="no_ktp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat_pelanggan" rows="3"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(function() {
            $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '',
                columns: [{
                        data: 'no',
                        name: 'id',
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'nama_pelanggan',
                        name: 'nama_pelanggan'
                    },
                    {
                        data: 'no_ktp',
                        name: 'no_ktp'
                    },
                    {
                        data: 'alamat_pelanggan',
                        name: 'alamat_pelanggan',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                    },
                ]
            });
        });
    </script>
@endpush
