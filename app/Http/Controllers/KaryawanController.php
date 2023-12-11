<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class KaryawanController extends Controller
{
    public function index()
	{
		$karyawan = DB::table('karyawan')
						->orderBy('namalengkap', 'asc')->get();

		return view('indexKaryawan',['karyawan' => $karyawan]);
	}
 
	public function tambah()
	{
		return view('tambahKaryawan');
 
	}
 
	public function store(Request $request)
	{
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->ID,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		return redirect('/karyawan');

	}

	public function hapus($id)
	{
		DB::table('karyawan')->where('kodepegawai',$id)->delete();
		return redirect('/karyawan');
	}

	public function cari(Request $request)
	{
		$cari = $request->cari;
		$karyawan = DB::table('karyawan')
			->where('namalengkap','like',"%".$cari."%")
			->orderBy('namalengkap', 'asc');

		return view('indexKaryawan',['karyawan' => $karyawan, 'cari' => $cari]);
	}

    public function update(Request $request)
	{
		DB::table('karyawan')->where('kodepegawai',$request->id)->update([
			'kodepegawai' => $request->ID,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		return redirect('/karyawan');
	}

    public function pesan()     
    {
        return view('pesan');
    }
}