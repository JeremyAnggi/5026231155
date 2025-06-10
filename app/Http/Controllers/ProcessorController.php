<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcessorController extends Controller
{
        public function index()
    {
    	// mengambil data dari table processor
    	$processor = DB::table('processor')->paginate(10);
 
    	// mengirim data processor ke view index
    	return view('processor.index',['processor' => $processor]);
 
    }
        public function tambah()
    {
        
	    // memanggil view tambah
	    return view('processor.tambah');
        
    }
    	
    public function store(Request $request)
	{
		// insert data ke table processor
		DB::table('processor')->insert([
			'merkprocessor' => $request->merkprocessor,
			'hargaprocessor' => $request->harga,
			'tersedia' => $request->tersedia,
			'berat' => $request->berat
		]);
		// alihkan halaman ke halaman processor
		return redirect('/processor');
 
	}
    	// method untuk hapus data processor
	public function hapus($id)
	{
		// menghapus data processor berdasarkan id yang dipilih
		DB::table('processor')->where('ID',$id)->delete();
			
		// alihkan halaman ke halaman processor
		return redirect('/processor');
	}

    	public function edit($id)
	{
		// mengambil data processor berdasarkan id yang dipilih
		$processor = DB::table('processor')->where('ID',$id)->get();
		// passing data processor yang didapat ke view edit.blade.php
		return view('processor.edit',['processor' => $processor]);
 
	}

    		// update data processor
	public function update(Request $request)
	{
		// update data processor
		DB::table('processor')->where('ID',$request->id)->update([
			'merkprocessor' => $request->merkprocessor,
			'hargaprocessor' => $request->harga,
			'tersedia' => $request->tersedia,
			'berat' => $request->berat
		]);
		// alihkan halaman ke halaman processor
		return redirect('/processor');
	}

    	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table processor sesuai pencarian data
		$processor = DB::table('processor')
		->where('merkprocessor','like',"%".$cari."%")
		->paginate();

    		// mengirim data processor ke view index
		return view('processor.index',['processor' => $processor]);

	}
}
