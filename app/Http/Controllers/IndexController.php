<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\Umum;
use App\Instansi;
use App\Kunjungan;
class IndexController extends Controller
{


    public function index()
    {
        //
        $umums = \DB::table('umums')->paginate(5);
        $instansis = \DB::table('instansis')->paginate(5);
        $kunjungans = \DB::table('kunjungans')->paginate(5);
        
    		// mengirim data pegawai ke view index
		return view('index',['umums' => $umums, 'instansis' => $instansis, 'kunjungans' => $kunjungans]);
    }

    public function search(Request $request)
    {
        $search = $request->search;
 
    		// mengambil data dari table pegawai sesuai pencarian data

		$umums = \DB::table('umums')
        ->where('telp','like',"%".$search."%")->paginate();

		$instansis = \DB::table('instansis')
        ->where('telp','like',"%".$search."%")->paginate();

    $kunjungans = \DB::table('kunjungans')
        ->where('nsurat','like',"%".$search."%")->paginate();

    		// mengirim data pegawai ke view index
        return view('index',['umums' => $umums, 'instansis' => $instansis, 'kunjungans' => $kunjungans]);  
    }
}
