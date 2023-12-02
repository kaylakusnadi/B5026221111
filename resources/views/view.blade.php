@extends('master')

@section('title', 'Data Pegawai')

@section('konten')
 
	<h3>Data Pegawai</h3>
    <br>
	
	@foreach($pegawai as $p)
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <img src="http://localhost/B5026221111/public/pegawai.jpg" class="img-fluid" alt="Foto Profil">
                      </div>
                    </div>
                  </div>
                <div class="col-md-8">
                    <ul class="list-group">

                        {{-- <li class="list-group-item">
                            <span class="font-weight-bold">Nama :</span> {{ $p->pegawai_nama }}
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-bold">Jabatan :</span> {{ $p->pegawai_jabatan }}
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-bold">Umur :</span> {{ $p->pegawai_umur }}
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-bold">Alamat :</span> {{ $p->pegawai_alamat }}
                        </li>
 --}} 

                        <li class="list-group-item"><h5>Nama :</h5> {{ $p->pegawai_nama }}</li>
                        <li class="list-group-item"><h5>Jabatan :</h5> {{ $p->pegawai_jabatan }}</li>
                        <li class="list-group-item"><h5>Umur :</h5> {{ $p->pegawai_umur }}</li>
                        <li class="list-group-item"><h5>Alamat :</h5> {{ $p->pegawai_alamat }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <br>
        <a class="btn btn-success float-right w-25" href="/pegawai"> OK </a>
        <br>
        <br>
        <br>

    </form>
    @endforeach
    
@endsection