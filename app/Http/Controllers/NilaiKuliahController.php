<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class NilaiKuliahController extends Controller
{
    public function index()
	{
		$nilaikuliah = DB::table('nilaikuliah')
						->orderBy('ID', 'asc')->get();

		return view('indexNilai',['nilaikuliah' => $nilaikuliah]);
	}
 
	public function tambah()
	{
		return view('tambahNilai');
 
	}
 
	public function store(Request $request)
	{
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->nrp,
			'NilaiAngka' => $request->nilaiangka,
			'SKS' => $request->sks
		]);
		return redirect('/nilaikuliah');
 
	}

	// public function hapus($id)
	// {
	// 	DB::table('nilaikuliah')->where('ID',$id)->delete();
	// 	return redirect('/nilaikuliah');
	// }
}