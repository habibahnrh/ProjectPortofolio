@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Penjualan</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
    <a href="{{route('juals.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah </a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th width="15%">No Transaksi</th>
                        <th width="15%">Tanggal</th>
                        <th width="15%">Jumlah</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($juals as $jl)
                    <tr>
                        <td>{{$jl->nokk}}</td>
                        <td>{{$jl->tglkk}}</td>
                        <td>{{$jl->jmkk}}</td>
                        <td align="center">
                            <a href="{{route( 'juals.show' ,[$jl ->id])}}" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i> Detail
                            </a>
                            <a href="/juals/hapus/{{ $jl->id }}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection