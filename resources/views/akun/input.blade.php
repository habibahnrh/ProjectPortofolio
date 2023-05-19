@extends('layouts.layout')
@section('content')
<form action="{{route('akun.store')}}" method="POST">
    @csrf
    <fieldset>
        <legend>Input Data Obat</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="kode">Kode Barang</label>
                <input id="kode" type="text" name="kode" class="form-control">
            </div>
            <div class="col-md-5">
                <label for="nama">Nama Barang</label>
                <input id="nama" type="text" name="nama" class="form-control">
            </div>
        </div>
        <div class="col-md-5">
            <label for="harga">Harga</label>
            <input id="harga" type="text" name="harga" class="form-control">
        </div>
        <div class="col-md-5">
            <label for="jnsbrg">Jenis Barang</label>
            <input id="jnsbrg" type="text" name="jnsbrg" class="form-control">
        </div>
        </div>
        </div>
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Simpan">
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div>
        <hr>
    </fieldset>
</form>
@endsection