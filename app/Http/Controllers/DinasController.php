<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kunjungan;
use PDF;

class DinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dinas');
    }
    public function create(Request $request){
        $request -> validate([
            'nsurat' => 'required',
            'penerima' => 'required',
            'sifat' => 'required',
            'perihal' => 'required',
            'tanggal' => 'required',
            'durasi' => 'required',
        ]);

        Kunjungan::create([
            'nsurat' => request('nsurat'),
            'penerima' => request('penerima'),
            'sifat' => request('sifat'),
            'perihal' => request('perihal'),
            'tanggal' => request('tanggal'),
            'durasi' => request('durasi'),
        ]);

        return view('dinas/index');
    }

    public function cetak_pdf()
    {
    	$kunjungans = Kunjungan::all();
    	$kunjungans = PDF::loadview('dinas/dinas_pdf',['kunjungans'=>$kunjungans]);
    	return $kunjungans->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
