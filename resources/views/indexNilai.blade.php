@extends('master')

@section('title', 'Nilai Kuliah')

@section('konten')

    <h3>Nilai Kuliah</h3>

    <a href="/nilaikuliah/tambah" class="btn btn-primary my-3">+ Tambah Data</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $p)
            <tr>
                <td>{{ $p->ID }}</td>
                <td>{{ $p->NRP }}</td>
                <td>{{ $p->NilaiAngka }}</td>
                <td>{{ $p->SKS }}</td>
                <td>
                    @if ($p->NilaiAngka <= 40)
                        D
                    @elseif($p->NilaiAngka <= 60)
                        C
                    @elseif($p->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>
                <td>{{ $p->NilaiAngka * $p->SKS }}</td>

            </tr>
        @endforeach
    </table>
@endsection
