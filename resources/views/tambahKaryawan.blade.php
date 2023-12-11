@extends('master')

@section('title', 'Data Karyawan')

@section('konten')

	<h3>Data Karyawan</h3>
	<br>

	<form action="/karyawan/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="kodepegawai" class="col-sm-2 col-form-label"><h6>ID Karyawan</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="ID" name="ID" placeholder="Masukkan 5 digit ID karyawan">
            </div>
        </div>

		<div class="form-group row">
            <label for="namalengkap" class="col-sm-2 col-form-label"><h6>Nama Lengkap</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukkan nama lengkap">
            </div>
        </div>

		<div class="form-group row">
            <label for="divisi" class="col-sm-2 col-form-label"><h6>Divisi</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="divisi" name="divisi" placeholder="Masukkan divisi karyawan 20 Karakter">
            </div>
        </div>

        <div class="form-group row">
            <label for="departemen" class="col-sm-2 col-form-label"><h6>Departemen</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="departemen" name="departemen" placeholder="Masukkan departemen karyawan">
            </div>
        </div>

		<br>

		<a class="btn btn-success" href="/karyawan"> Kembali</a>
		<input class="btn btn-primary" type="submit" value="Simpan Data">
		
	</form>

    <br>
    <br>
    <br>
		
@endsection