<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Sktkis;
use App\Models\Suratketerangandomisili;
use App\Models\Suratketeranganusaha;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request('search'))
        {
            return view('laporan.suratKeluar.index', [
                'judul'         => "Surat Keluar",
                'laporan'       => Laporan::Where('noSurat', 'like', '%' . request('search') . '%')->get(),
                'jumlahSKU'     => Laporan::Where('nama', 'Surat Keterangan Usaha')->count(),
                'jumlahSKD'     => Laporan::Where('nama', 'Surat Keterangan Domisili')->count(),
                'jumlahSKTMK'   => Laporan::Where('nama', 'Surat Keterangan Tidak Memiliki KIS')->count(),
            ]);
        }

        return view('laporan.suratKeluar.index', [
            'judul'         => "Surat Keluar",
            'laporan'       => Laporan::All(),
            'jumlahSKU'     => Laporan::Where('nama', 'Surat Keterangan Usaha')->count(),
            'jumlahSKD'     => Laporan::Where('nama', 'Surat Keterangan Domisili')->count(),
            'jumlahSKTMK'   => Laporan::Where('nama', 'Surat Keterangan Tidak Memiliki KIS')->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        Laporan::destroy($laporan->id);
        if($laporan->nama == "Surat Keterangan Usaha")
        {
            $sku = Suratketeranganusaha::Where('noSurat', $laporan->noSurat)->get();
            Suratketeranganusaha::destroy($sku[0]->id);
        }
        
        if($laporan->nama == "Surat Keterangan Domisili")
        {
            $skd = Suratketerangandomisili::Where('noSurat', $laporan->noSurat)->get();
            Suratketerangandomisili::destroy($skd[0]->id);
        }

        if($laporan->nama == "Surat Keterangan Tidak Memiliki KIS")
        {
            $sktmk = Sktkis::Where('noSurat', $laporan->noSurat)->get();
            Sktkis::destroy($sktmk[0]->id);
        }
        
        return redirect('/laporan')->with('success', 'Surat berhasil di hapus!');
    }
}
