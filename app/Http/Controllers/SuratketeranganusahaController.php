<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Penduduk;
use App\Models\Suratketeranganusaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SuratketeranganusahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layanan.suratKeteranganUsaha.index', [
            'judul' => 'Surat Keterangan Usaha',
            'noSurat' => '0'. (int)Suratketeranganusaha::count() + 1 .'/SKU-DLS/III/' . date('Y'),
            'sku' => Suratketeranganusaha::all()
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
        // return response()->json([
        //     'jenisUsaha'    => $request->jenisUsaha,
        //     'alamatUsaha'   => $request->alamatUsaha,
        //     'noSurat'       => $request->noSurat,
        //     'penduduk_id'   => $request->penduduk_id
        // ]);
        $validateData = Validator::make($request->all(),[
            'jenisUsaha'    =>  'required',
            'alamatUsaha'   =>  'required',
            'noSurat'       =>  'required',
            'penduduk_id'   =>  'required',
        ]);

        if($validateData->fails())
        {
            return response()->json([
                'message' => $validateData->errors()]
            );
        }

        Suratketeranganusaha::create([
            'penduduk_id'   =>  $request->penduduk_id,
            'noSurat'       =>  $request->noSurat,
            'jenisUsaha'    =>  $request->jenisUsaha,
            'alamatUsaha'   =>  $request->alamatUsaha,
        ]);

        Laporan::create([
            'nama'          => "Surat Keterangan Usaha",
            'penduduk_id'   =>  $request->penduduk_id,
            'surat_id'      =>  Suratketeranganusaha::pluck('id')->last(),
            'noSurat'       =>  $request->noSurat,
        ]);

        return response()->json([
            'message' => ['success' => 'Surat berhasil di buat!']
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suratketeranganusaha  $suratketeranganusaha
     * @return \Illuminate\Http\Response
     */
    public function show(Suratketeranganusaha $suratketeranganusaha)
    {
        return response()->json([
            'sku' => $suratketeranganusaha
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suratketeranganusaha  $suratketeranganusaha
     * @return \Illuminate\Http\Response
     */
    public function edit(Suratketeranganusaha $suratketeranganusaha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suratketeranganusaha  $suratketeranganusaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suratketeranganusaha $suratketeranganusaha)
    {
        // return response()->json([
        //     'jenisUsaha'    => $request->jenisUsaha,
        //     'alamatUsaha'   => $request->alamatUsaha,
        //     'noSurat'       => $request->noSurat,
        //     'penduduk_id'   => $request->penduduk_id
        // ]);
        $validateData = Validator::make($request->all(),[
            'jenisUsaha'    =>  'required',
            'alamatUsaha'   =>  'required',
            'noSurat'       =>  'required',
            'penduduk_id'   =>  'required',
        ]);

        if($validateData->fails())
        {
            return response()->json([
                'message' => $validateData->errors()]
            );
        }

        Suratketeranganusaha::find($suratketeranganusaha->id)
                            ->update([
            'penduduk_id'   =>  $request->penduduk_id,
            'noSurat'       =>  $request->noSurat,
            'jenisUsaha'    =>  $request->jenisUsaha,
            'alamatUsaha'   =>  $request->alamatUsaha,
        ]);
        return response()->json([
            'message' => ['success' => 'Surat berhasil di edit!']
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suratketeranganusaha  $suratketeranganusaha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suratketeranganusaha $suratketeranganusaha)
    {
        Suratketeranganusaha::destroy($suratketeranganusaha->id);
        return redirect('/suratKeteranganUsaha')->with('success', 'Surat berhasil di hapus!');
    }

    
    public function pemohonById(Penduduk $penduduk)
    {
        return response()->json([
            'penduduk' => $penduduk
        ]);
    }

    public function calonPemohonSurat()
    {
        $penduduk = Penduduk    ::where     ('nama',            'like', '%' . request('any') . '%')
                                ->orWhere   ('nik',             'like', '%' . request('any') . '%')
                                ->orWhere   ('alamat',          'like', '%' . request('any') . '%')
                                ->get();
        
        return response()->json([
            'penduduk' => $penduduk
        ]);
    }

    public function laporan(Suratketeranganusaha $suratketeranganusaha)
    {
        return response()->json([
            'dataSurat' => $suratketeranganusaha
        ]);
    }

}
