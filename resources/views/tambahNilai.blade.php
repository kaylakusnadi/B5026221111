@extends('master')

@section('title', 'Nilai Kuliah')

@section('konten')

	<h3>Nilai Kuliah</h3>
	<br>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

		<div class="form-group row">
            <label for="NRP" class="col-sm-2 col-form-label mr-2"><h6>NRP</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="nrp" name="nrp" placeholder="Masukkan NRP mahasiswa, pastikan berisi 6 angka!">
            </div>
        </div>

		<div class="form-group row">
            <label for="NilaiAngka" class="col-sm-2 col-form-label mr-2"><h6>Nilai Angka</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="nilaiangka" name="nilaiangka" placeholder="Masukkan nilai yang berupa angka, contoh: 86">
            </div>
        </div>

		<div class="form-group row">
            <label for="SKS" class="col-sm-2 col-form-label mr-2"><h6>SKS</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" class="form-control" id="sks" name="sks" placeholder="Masukkan jumlah sks">
            </div>
        </div>

		<br>

		<a class="btn btn-success" href="/nilaikuliah">Kembali</a>
		<input class="btn btn-primary" type="submit" value="Simpan Data">
		
	</form>
		
@endsection