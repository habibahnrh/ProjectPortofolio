@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pelanggan</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
    <a href="{{route('pelanggans.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah </a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th width="15%">Nama Pelanggan</th>
                        <th width="15%">Tanggal Daftar</th>
                        <th width="15%">Alamat Pelanggan</th>
                        <th width="15%">Email Pelanggan</th>
                        <th width="15%">No Telepon Pelanggan</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggans as $plgn)
                    <tr>
                        <td>{{$plgn->nama}}</td>
                        <td>{{$plgn->tgldftr}}</td>
                        <td>{{$plgn->alamat}}</td>
                        <td>{{$plgn->email}}</td>
                        <td>{{$plgn->notelp}}</td>
                        <td align="center">
                            <a href="{{route( 'pelanggans.edit' ,[$plgn->id])}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i> Edit
                            </a>
                            <a href="/pelanggans/hapus/{{ $plgn->id }}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
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