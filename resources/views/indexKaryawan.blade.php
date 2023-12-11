@extends('master')

@section('title', 'Data Karyawan')

@section('konten')

    <h3>Data Karyawan</h3>
    <br />

    <p>Cari Karyawan :</p>
    <form action="/karyawan/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari karyawan berdasarkan nama . . ."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
        <input class="btn btn-primary my-3" type="submit" value="Cari">
    </form>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>ID Karyawan</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ strtoupper($k->namalengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ strtolower($k->departemen) }}</td>

                <td>
                    <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
                </td>

            </tr>
        @endforeach
    </table>

    <a href="/karyawan/tambah" class="btn btn-success my-3"> + Tambah Data Karyawan Baru</a>
    @if ($errors->any())
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            Karyawan tersebut sudah masuk dalam data!
        </div>
    @endif

    <br>
    <br>

@endsection
