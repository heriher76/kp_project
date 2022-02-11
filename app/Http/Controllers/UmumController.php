<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Umum;
use PDF;

class UmumController extends Controller
{
    public function tamp(){
        
        return view('umum');
        
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

        
        
        Umum::create([
            'name' => request('name'),
            'email' => request('email'),
            'alamat' => request('alamat'),
            'tanggal' => request('tanggal'),
            'telp' => request('telp'),
            'tujuan' => request('tujuan'),
            'snack' => request('snack')
        ]);
        

        return view('umum/index');
    }

    public function cetak_pdf()
    {
    	$umums = Umum::all();
    	$umums = PDF::loadview('umum/umum_pdf',['umums'=>$umums]);
    	return $umums->stream();
    }
}

