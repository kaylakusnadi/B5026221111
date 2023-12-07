@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

	<h3>Data Pegawai</h3>
	<br>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

		<div class="form-group row">
            <label for="nama" class="col-sm-1 col-form-label mr-2"><h6>Nama</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama pegawai">
            </div>
        </div>

		<div class="form-group row">
            <label for="jabatan" class="col-sm-1 col-form-label mr-2"><h6>Jabatan</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan jabatan pegawai">
            </div>
        </div>

		<div class="form-group row">
            <label for="umur" class="col-sm-1 col-form-label mr-2"><h6>Umur</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="umur" name="umur" placeholder="Masukkan umur pegawai">
            </div>
        </div>

		<div class="form-group row">
            <label for="alamat" class="col-sm-1 col-form-label mr-2"><h6>Alamat</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat pegawai">
            </div>
        </div>

		<br>

		<a class="btn btn-success" href="/pegawai"> Kembali</a>
		<input class="btn btn-primary" type="submit" value="Simpan Data">

		{{-- Nama <input type="text" name="nama"> <br/>
		Jabatan <input type="text" name="jabatan"> <br/>
		Umur <input type="number" name="umur"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}
		
	</form>
		
@endsection