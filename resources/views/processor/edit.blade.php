@extends('template')

@section('content')
	<h3>Edit processor</h3>
 
	<a href="/processor"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($processor as $p)



        <form action="/processor/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->ID}}"> <br/>
        <div class = "row">
            <div class = "col-2">
                <p>Merk Processor</p>
            </div>
            <div class = "col-10">
                <input type="text" name="merkprocessor" required="required" class="form-control" value="{{ $p->merkprocessor }}">
            </div>

            <div class = "col-2">
                <p>Harga</p>
            </div>
            <div class = "col-10">
                <input type="text" name="harga" required="required" class="form-control" value="{{ $p->hargaprocessor}}">
            </div>

            <div class="col-2">
                <p>Tersedia</p>
            </div>
            <div class="col-10">
                <select name="tersedia" class="form-control" required value="{{ $p->tersedia}}">
                    <option value="1">Tersedia</option>
                    <option value="0">Kosong</option>
                </select>
            </div>


            <div class = "col-2">
                <p>Berat</p>
            </div>
            <div class = "col-10">
                <input type="number" name="berat" required="required" class="form-control" value="{{ $p->berat}}">
            </div>

            <div class = "col-10"></div>
            <div class = "col-2">
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </div>

        </div>

    </form>
	@endforeach
		
@endsection