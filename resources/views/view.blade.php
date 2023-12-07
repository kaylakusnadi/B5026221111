@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

<style>
    .box {
        border: 4px solid #f0f0f0;
        padding: 20px;
        border-radius: 10px;
        width: 220px;
        height: 275px;
    }
</style>

    <h3>Data Pegawai</h3>
    <br>

    <div class="row">
        <div class="col-md-3">
            <div class="box mx-auto">
            </div>
        </div>

        <div class="col-md-8">
            @foreach ($pegawai as $p)
                <form action="/pegawai/update" method="post" class="form-horizontal">
                    {{ csrf_field() }}

                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />

                    <div class="form-group row">
                        <label for="nama" class="col-sm-1 col-form-label mr-2"><h6>Nama</h6></label>
                        <label class="col-sm-1 col-form-label"><h6>:</h6></label>
                        <label class="col-form-label" name="nama">{{ $p->pegawai_nama }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-1 col-form-label mr-2"><h6>Jabatan</h6></label>
                        <label class="col-sm-1 col-form-label"><h6>:</h6></label>
                        <label class="col-form-label" name="jabatan">{{ $p->pegawai_jabatan }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-1 col-form-label mr-2"><h6>Umur</h6></label>
                        <label class="col-sm-1 col-form-label"><h6>:</h6></label>
                        <label class="col-form-label" name="umur">{{ $p->pegawai_umur }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-1 col-form-label mr-2"><h6>Alamat</h6></label>
                        <label class="col-sm-1 col-form-label"><h6>:</h6></label>
                        <label class="col-form-label" name="alamat">{{ $p->pegawai_alamat }}</label>
                    </div>

                    <br>
                </div>
            </form>
        </div>

        <br>
        <a class="btn btn-success float-right w-25" href="/pegawai"> OK </a>
        <br>
        <br>
        <br>

    @endforeach

@endsection