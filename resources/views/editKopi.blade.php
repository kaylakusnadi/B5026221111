@extends('master')

@section('title', 'Data Kopi')

@section('konten')

    <h3>Edit Kopi</h3>

    @foreach($kopi as $k)
        <form action="/kopi/update" method="post" class="form-horizontal">
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{ $k->kodekopi }}"> <br />

            <div class="form-group row">
                <label for="merkkopi" class="col-sm-2 col-form-label">
                    <h6>Merek Kopi</h6>
                </label>
                <label class="col-form-label">
                    <h6>:</h6>
                </label>
                <div class="col-sm-6">
                    <input type="text" required="required" class="form-control" id="merk" name="merk"
                        value="{{ $k->merkkopi }}" placeholder="Masukkan merk kopi">
                </div>
            </div>

            <div class="form-group row">
                <label for="stockkopi" class="col-sm-2 col-form-label">
                    <h6>Stock Kopi</h6>
                </label>
                <label class="col-form-label">
                    <h6>:</h6>
                </label>
                <div class="col-sm-6">
                    <input type="text" required="required" class="form-control" id="stock" name="stock"
                        value="{{ $k->stockkopi }}" placeholder="Masukkan stock kopi yang tersedia">
                </div>
            </div>

            <br>

            <a class="btn btn-success" href="/kopi"> Kembali</a>
            <input class="btn btn-primary" type="submit" value="Simpan Data">

        </form>
    @endforeach
@endsection
