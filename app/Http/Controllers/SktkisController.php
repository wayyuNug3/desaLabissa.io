<?php

namespace App\Http\Controllers;

use App\Models\Sktkis;
use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\Penduduk;

class SktkisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layanan.sktkis.index', [
            'judul' => 'Surat Keterangan Tidak Memiliki Kartu Indonesia Sehat',
            'noSurat' => '0'. (int)Sktkis::count() + 1 .'/DLS/II/' . date('Y'),
            'sku' => Sktkis::all()
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

        $validateData = $request->validate([
            'noSurat'       => 'required',
            'penduduk_id'   => 'required',
            'pejabat'       => 'required',
        ]);

        $validateData['laporan_id'] = 1;

        Sktkis::create($validateData);

        Laporan::create([
            'nama'          => "Surat Keterangan Tidak Memiliki KIS",
            'penduduk_id'   =>  $request->penduduk_id,
            'surat_id'      =>  Sktkis::pluck('id')->last(),
            'noSurat'       =>  $request->noSurat,
        ]);

        return response()->json([
            'message' => "Surat Berhasi Dibuat"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sktkis  $sktkis
     * @return \Illuminate\Http\Response
     */
    public function show(Sktkis $sktkis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sktkis  $sktkis
     * @return \Illuminate\Http\Response
     */
    public function edit(Sktkis $sktkis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sktkis  $sktkis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sktkis $sktkis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sktkis  $sktkis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sktkis $sktkis)
    {
        //
    }

    public function calonPemohon()
    {
            $penduduk = Penduduk    ::where     ('nama',            'like', '%' . request('any') . '%')
                                    ->orWhere   ('nik',             'like', '%' . request('any') . '%')
                                    ->orWhere   ('alamat',          'like', '%' . request('any') . '%')
                                    ->get();
            
            return response()->json([
                'penduduk' => $penduduk
            ]);
    }

    public function calonPemohonById(Penduduk $penduduk)
    {
        $penduduk = Penduduk::find($penduduk->id);
        return response()->json([
            'penduduk' => $penduduk
        ]);
    }

    public function laporan(Sktkis $sktkis)
    {
        return response()->json([
            'dataSurat' => $sktkis
        ]);
    }
}
