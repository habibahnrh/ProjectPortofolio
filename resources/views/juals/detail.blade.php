@extends('layouts.layout')
@section('content')
<form action="" method="POST">
    @csrf
    <fieldset>
        <div class="form-group row">
            <div class="col-md-5">
                Nomor Transaksi<input type="text" class="form-control" value="{{$juals->nokk}}" disabled>
            </div>
            <div class="col-md-5">
                Tanggal transaksi<input type="date" value="{{$juals->tglkk}}" class="form-control" disabled>
            </div>
        </div>
        </div>
        <div class="form-group row">
            <div class="col-md-10">Total 
                <input type="text" class="form-control" value="{{$juals->jmkk}}" disabled>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-10">Data Akun Yang Digunakan
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <td width="20%">Id Akun</td>
                            <td width="20%">Kode Akun</t d>
                            <td width="30%">Jumlah </td>
                        </tr>
                    <tbody>
                        @endforeach
                    </tbody>
                    </thead>