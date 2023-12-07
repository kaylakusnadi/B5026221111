@extends('master')

@section('title', 'Data Pegawai')

@section('konten')
 
	<h3>Edit Pegawai</h3>
	
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" class="form-horizontal">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

		<div class="form-group row">
            <label for="nama" class="col-sm-1 col-form-label mr-2"><h6>Nama</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" required="required" class="form-control" id="nama" name="nama" value="{{ $p->pegawai_nama }}" placeholder="Masukkan nama pegawai">
            </div>
        </div>

		<div class="form-group row">
            <label for="jabatan" class="col-sm-1 col-form-label mr-2"><h6>Jabatan</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" required="required" class="form-control" id="jabatan" name="jabatan" value="{{ $p->pegawai_jabatan }}" placeholder="Masukkan jabatan pegawai">
            </div>
        </div>

		<div class="form-group row">
            <label for="umur" class="col-sm-1 col-form-label mr-2"><h6>Umur</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" required="required" class="form-control" id="umur" name="umur" value="{{ $p->pegawai_umur }}" placeholder="Masukkan umur pegawai">
            </div>
        </div>

		<div class="form-group row">
            <label for="alamat" class="col-sm-1 col-form-label mr-2"><h6>Alamat</h6></label>
            <label class="col-form-label"><h6>:</h6></label>
            <div class="col-sm-6">
            	<input type="text" required="required" class="form-control" id="alamat" name="alamat" value="{{ $p->pegawai_alamat }}" placeholder="Masukkan alamat pegawai">
            </div>
        </div>

		<br>

		{{-- Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/> --}}


		<a class="btn btn-success" href="/pegawai"> Kembali</a>
		<input class="btn btn-primary" type="submit" value="Simpan Data">

	</form>
	@endforeach
		
@endsection