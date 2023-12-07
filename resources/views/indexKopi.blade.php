@extends('master')

@section('title', 'Data Kopi')

@section('konten')

    <h3>Data Kopi</h3>

    <a href="/kopi/tambah" class="btn btn-success my-3"> + Tambah Kopi Baru</a>

    <br />
    <p>Cari Kopi :</p>
    <form action="/kopi/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari kopi berdasarkan merek . . ."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
        <input class="btn btn-primary my-3" type="submit" value="Cari">
    </form>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Nama Merek Kopi</th>
            <th>Stock</th>
            <th class="text-center">Tersedia</th>
            <th class="text-center">Opsi</th>
        </tr>
        @foreach ($kopi as $k)
            <tr>
                <td>{{ $k->kodekopi }}</td>
                <td>{{ $k->merkkopi }}</td>
                <td>{{ $k->stockkopi }}</td>
                <td class="text-center">
                    {{-- @if ($k->tersedia == '1') class="bg-success"
                    @elseif ($k->tersedia == '0') class="bg-danger" @endif> --}}
                    <div>
                        <input type="checkbox" disabled {{ $k->tersedia == '1' ? 'checked' : '' }}>
                    </div>
                </td>

                <td>
                    <center>
                        <a href="/kopi/edit/{{ $k->kodekopi }}" class="btn btn-warning" style="margin-right: 10px;">Edit</a>
                        <a href="/kopi/hapus/{{ $k->kodekopi }}" class="btn btn-danger">Hapus</a>
                    </center>
                </td>

            </tr>
        @endforeach
    </table>
@endsection
