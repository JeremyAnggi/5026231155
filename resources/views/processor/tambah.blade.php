@extends('template')

@section('content')
    <a href="/processor" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/processor/store" method="post">
        {{ csrf_field() }}
        <div class = "row">
            <div class = "col-2">
                <p>Merk Processor</p>
            </div>
            <div class = "col-10">
                <input type="text" name="merkprocessor" required="required" class="form-control">
            </div>

            <div class = "col-2">
                <p>Harga</p>
            </div>
            <div class = "col-10">
                <input type="text" name="harga" required="required" class="form-control">
            </div>

            <div class="col-2">
                <p>Tersedia</p>
            </div>
            <div class="col-10">
                <select name="tersedia" class="form-control" required>
                    <option value="1">Tersedia</option>
                    <option value="0">Kosong</option>
                </select>
            </div>


            <div class = "col-2">
                <p>Berat</p>
            </div>
            <div class = "col-10">
                <input type="number" name="berat" required="required" class="form-control">
            </div>

            <div class = "col-10"></div>
            <div class = "col-2">
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </div>

        </div>

    </form>
@endsection