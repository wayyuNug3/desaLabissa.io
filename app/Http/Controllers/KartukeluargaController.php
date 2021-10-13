<?php

namespace App\Http\Controllers;

use App\Models\Kartukeluarga;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class KartukeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartukeluarga = Kartukeluarga::latest()->get(); 
        
        if(request('search'))
        {
            $kartukeluarga = Kartukeluarga::where('nokk', 'like', '%'. request('search') .'%')->get(); 
        }
        
        return view('kartuKeluarga.index', [
            'judul' => 'Kartu Keluarga',
            'kartuKeluarga' => $kartukeluarga
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
        $validated = $request->validate([
            'nokk'              => 'required|numeric|unique:kartukeluargas',
        ]);


        Kartukeluarga::create($validated);
        return redirect('/kartuKeluarga')->with('success', 'Kartu Keluarga berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kartukeluarga  $kartukeluarga
     * @return \Illuminate\Http\Response
     */
    public function show(Kartukeluarga $kartukeluarga)
    {
        $kepalaKeluarga = Penduduk::where('nokk', $kartukeluarga->nokk)->where('statusKeluarga' , 'Kepala Keluarga')->get();
        $anggota = Penduduk::where('nokk', $kartukeluarga->nokk)->where('statusKeluarga' , 'Anggota')->get();
        return response()->json([
            'jumlahAnggota'     => (int)$kepalaKeluarga->count() + (int)$anggota->count(),
            'kepalaKeluarga'    => $kepalaKeluarga[0],
            'anggota'           => $anggota
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kartukeluarga  $kartukeluarga
     * @return \Illuminate\Http\Response
     */
    public function edit(Kartukeluarga $kartukeluarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kartukeluarga  $kartukeluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kartukeluarga $kartukeluarga)
    {
        $validated = $request->validate([
            'nokk'              => 'required|numeric',
        ]);

        Kartukeluarga::find($kartukeluarga->id)->update($validated);
        return redirect('/kartuKeluarga')->with('success', 'Kartu Keluarga berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kartukeluarga  $kartukeluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kartukeluarga $kartukeluarga)
    {
        Kartukeluarga::destroy($kartukeluarga->id);
        return redirect('/kartuKeluarga')->with('success', 'Kartu Keluarga berhasil dihapus!');
    }
}
