<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class KopiController extends Controller
{
    public function index()
	{
		$kopi = DB::table('kopi')
						->orderBy('kodekopi', 'asc')->get();

		return view('indexKopi',['kopi' => $kopi]);
	}
 
	public function tambah()
	{
		return view('tambahKopi');
 
	}
 
	public function store(Request $request)
	{
		DB::table('kopi')->insert([
			'merkkopi' => $request->merk,
			'stockkopi' => $request->stock,
			'tersedia' => $request->stock > 0 ? '1' : '0'
		]);
		return redirect('/kopi');

	}

	public function hapus($id)
	{
		DB::table('kopi')->where('kodekopi',$id)->delete();
		return redirect('/kopi');
	}

	public function edit($id)
	{
		$kopi = DB::table('kopi')->where('kodekopi',$id)->get();
		return view('editKopi',['kopi' => $kopi]);
	}
 
	public function update(Request $request)
	{
		DB::table('kopi')->where('kodekopi',$request->id)->update([
			'merkkopi' => $request->merk,
			'stockkopi' => $request->stock,
			'tersedia' => $request->stock > 0 ? '1' : '0'
		]);
		return redirect('/kopi');
	}

	public function cari(Request $request)
	{
		$cari = $request->cari;
		$kopi = DB::table('kopi')
			->where('merkkopi','like',"%".$cari."%")
			->orderBy('kodekopi', 'asc')->get();

		return view('indexKopi',['kopi' => $kopi, 'cari' => $cari]);
	}
}