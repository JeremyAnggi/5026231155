@extends('template')

@section('content')
    <h3>Processor</h3>

    <a href="/processor/tambah"class="btn btn-primary"> + Tambah jenis processor</a>
    <br />

    <h3>Cari Processor:</h3>
    <form action="/processor/cari" method="GET">
        <input type="text" class="form-control" name="cari"placeholder="Cari processor ..">
        <input type="submit" class="btn btn-info"value="CARI">
    </form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>Merk Processor</th>
            <th>Harga</th>
            <th>Ketersediaan</th>
            <th>Berat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($processor as $p)
            <tr>
                <td>{{ $p->merkprocessor }}</td>
                <td>{{ 'Rp ' . number_format($p->hargaprocessor, 0, ',', '.') }}</td>
               <td>{{ $p->tersedia == 1 ? 'Tersedia' : 'Kosong' }}</td>
                <td>{{ number_format($p->berat, 2) }} kg</td>
                <td>
                    <a href="/processor/edit/{{ $p->ID }}" class="btn btn-success">Edit</a>

                    <a href="/processor/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $processor->links() }}
@endsection