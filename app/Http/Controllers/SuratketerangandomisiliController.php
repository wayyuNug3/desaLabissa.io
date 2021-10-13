<?php

namespace App\Http\Controllers;

use App\Models\Suratketerangandomisili;
use App\Models\Laporan;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SuratketerangandomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layanan.suratKeteranganDomisili.index', [
            'judul'     => 'Surat Keterangan Domisili',
            'noSurat'   =>  '0'. (int)Suratketerangandomisili::count() + 1 .'/SKD-DLS/III/' . date('Y'),
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
            //     'message' => $request->all()
            // ]);
            
        $validateData = Validator::make($request->all(),[
            'noSurat'       => 'required',
            'pejabat'       => 'required',
        ]);
       

        if($validateData->fails())
        {
            return response()->json([
                'message' => $validateData->errors()]
            );
        }

        Suratketerangandomisili::create([
            'penduduk_id'   => Penduduk::pluck('id')->last(),
            'noSurat'       => $request->noSurat,
            'pejabat'       => $request->pejabat,
        ]);

        Laporan::create([
            'nama'          => "Surat Keterangan Domisili",
            'penduduk_id'   =>  Penduduk::pluck('id')->last(),
            'surat_id'      =>  Suratketerangandomisili::pluck('id')->last(),
            'noSurat'       =>  $request->noSurat,
        ]);

        return response()->json([
            'message' => ['success' => 'Surat berhasil di buat!']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suratketerangandomisili  $suratketerangandomisili
     * @return \Illuminate\Http\Response
     */
    public function show(Suratketerangandomisili $suratketerangandomisili)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suratketerangandomisili  $suratketerangandomisili
     * @return \Illuminate\Http\Response
     */
    public function edit(Suratketerangandomisili $suratketerangandomisili)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suratketerangandomisili  $suratketerangandomisili
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suratketerangandomisili $suratketerangandomisili)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suratketerangandomisili  $suratketerangandomisili
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suratketerangandomisili $suratketerangandomisili)
    {
        //
    }

    public function pendudukBerdomisili(Request $request)
    {
        // return response()->json([
        //     'data' => $request->all()
        // ]);
        $validateData = Validator::make($request->all(),[
            'nokk'              => 'required',
            'nik'               => 'required',
            'nama'              => 'required',
            'jenisKelamin'      => 'required',
            'tempatLahir'       => 'required',
            'tanggalLahir'      => 'required',
            'alamat'            => 'required',
            'rt'                => 'required',
            'rw'                => 'required',
            'golonganDarah'     => 'required',
            'agama'             => 'required',
            'statusKeluarga'    => 'required',
            'statusPerkawinan'  => 'required',
            'pekerjaan'         => 'required',
            'kewarganegaraan'   => 'required',
        ]);

        if($validateData->fails())
        {
            return response()->json([
                'message' => $validateData->errors()]
            );
        }

        Penduduk::create([
            'nokk'              => $request->nokk,
            'nik'               => $request->nik,
            'nama'              => $request->nama,
            'jenisKelamin'      => $request->jenisKelamin,
            'tempatLahir'       => $request->tempatLahir,
            'tanggalLahir'      => $request->tanggalLahir,
            'alamat'            => $request->alamat,
            'rt'                => $request->rt,
            'rw'                => $request->rw,
            'golonganDarah'     => $request->golonganDarah,
            'agama'             => $request->agama,
            'statusKeluarga'    => $request->statusKeluarga,
            'statusPerkawinan'  => $request->statusPerkawinan,
            'pekerjaan'         => $request->pekerjaan,
            'kewarganegaraan'   => $request->kewarganegaraan,
            'statusPenduduk'    => 'Warga Domisili',
        ]);
        return response()->json([
            'message' => ['success' => 'Surat berhasil di buat!']
        ]);
    }

    public function laporan(Suratketerangandomisili $suratketerangandomisili)
    {
        return response()->json([
            'dataSurat' => $suratketerangandomisili
        ]);
    }
}
