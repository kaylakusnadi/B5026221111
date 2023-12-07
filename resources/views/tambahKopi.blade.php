@extends('master')

@section('title', 'Data Kopi')

@section('konten')

	<h3>Data Kopi</h3>
	<br>

	<form action="/kopi/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

		{{-- <div class="form-group row">
            <label for="ID" class="col-sm-2 col-form-label mr-2"><h6>Kode Pembelian :</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="kodepembelian" name="kodepembelian" placeholder="Masukkan kode pembelian">
            </div>
        </div> --}}

		<div class="form-group row">
            <label for="merkkopi" class="col-sm-2 col-form-label"><h6>Merek Kopi</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="merk" name="merk" placeholder="Masukkan merk kopi">
            </div>
        </div>

		<div class="form-group row">
            <label for="stockkopi" class="col-sm-2 col-form-label"><h6>Stock Kopi</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="stock" name="stock" placeholder="Masukkan stock kopi yang tersedia">
            </div>
        </div>

		<br>

		<a class="btn btn-success" href="/kopi"> Kembali</a>
		<input class="btn btn-primary" type="submit" value="Simpan Data">
		
	</form>

    <br>
    <br>
    <br>
		
@endsection