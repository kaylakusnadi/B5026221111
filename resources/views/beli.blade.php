@extends('master')

@section('title', 'Keranjang Belanja')

@section('konten')

	<h3>Keranjang Belanja</h3>
	<br>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

		{{-- <div class="form-group row">
            <label for="ID" class="col-sm-2 col-form-label mr-2"><h6>Kode Pembelian :</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="kodepembelian" name="kodepembelian" placeholder="Masukkan kode pembelian">
            </div>
        </div> --}}

		<div class="form-group row">
            <label for="KodeBarang" class="col-sm-2 col-form-label mr-2"><h6>Kode Barang</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="kodebarang" name="kodebarang" placeholder="Masukkan kode barang">
            </div>
        </div>

		<div class="form-group row">
            <label for="Jumlah" class="col-sm-2 col-form-label mr-2"><h6>Jumlah Pembelian</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan jumlah barang">
            </div>
        </div>

		<div class="form-group row">
            <label for="Harga" class="col-sm-2 col-form-label mr-2"><h6>Harga per item</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan harga barang per satuan">
            </div>
        </div>

		<br>

		<a class="btn btn-success" href="/keranjangbelanja">Kembali</a>
		<input class="btn btn-primary" type="submit" value="Simpan Data">
		
	</form>
		
@endsection