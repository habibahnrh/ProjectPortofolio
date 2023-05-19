@extends('layouts.layout')
@section('content')
<form action="{{route('pelanggans.store')}}" method="POST">
    @csrf
    <fieldset>
        <legend>Input Data Pelanggan</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="nama">Nama</label>
                <input id="nama" type="text" name="nama" class="form-control">
            </div>
            <div class="col-md-5"><label for="tgldftr">Tanggal Daftar</label>
                <input id="tgldftr" type="text" name="tgldftr" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
            <div class="col-md-5"><label for="alamat">Alamat</label>
                <input id="alamat" type="text" name="alamat" class="form-control">
            </div>
            <div class="col-md-5">
                <label for="email">Email</label>
                <input id="email" type="text" name="email" class="form-control">
            </div>
            <div class="col-md-5">
                <label for="notelp">No Telpon</label>
                <input id="notelp" type="text" name="notelp" class="form-control">
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