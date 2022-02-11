<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instansi;
use PDF;


class InstansiController extends Controller
{
    public function tamp(){
        
        return view('instansi');
        
    }

    public function create(Request $request){

        $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required',
            'telp' => 'required',
            'tujuan' => 'required',
            'snack' => 'required',
        ]);
        

        Instansi::create([
            'name' => request('name'),
            'email' => request('email'),
            'alamat' => request('alamat'),
            'tanggal' => request('tanggal'),
            'telp' => request('telp'),
            'tujuan' => request('tujuan'),
            'snack' => request('snack')
        ]);
        return view('instansi/index');
    }

    public function cetak_pdf()
    {
    	$instansis = Instansi::all();
    	$instansis = PDF::loadview('instansi/instansi_pdf',['instansis'=>$instansis]);
    	return $instansis->stream();
    }
}
