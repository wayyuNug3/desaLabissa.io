<?php

namespace App\Http\Controllers;

use App\Models\Kartukeluarga;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
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
            return view('penduduk.index', [
                'judul'     => "Penduduk Desa",
                'penduduk'  => Penduduk ::where     ('nama',            'like', '%' . request('search') . '%')
                                        ->orWhere   ('nik',             'like', '%' . request('search') . '%')
                                        ->orWhere   ('alamat',          'like', '%' . request('search') . '%')
                                        ->orWhere   ('agama',           'like', '%' . request('search') . '%')
                                        ->orWhere   ('statusKeluarga',  'like', '%' . request('search') . '%')
                                        ->get(),
                'jumlahKK'  => Penduduk::where('statusKeluarga',  'like', '%' . request('search') . '%')->count(),
            ]);
        }
        
        return view('penduduk.index', [
            'judul'                 => "Penduduk Desa",
            'penduduk'              => Penduduk::latest()->get(),
            'jumlahKK'              => Kartukeluarga::count(),
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
            'nokk'              => 'required|numeric',
            'nik'               => 'required|numeric',
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

        $validated['statusPenduduk'] = 'Warga Asli';

        Penduduk::create($validated);
        return redirect('/penduduk')->with('success', 'Penduduk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        return response()->json([
            'penduduk' => $penduduk
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        $validated = $request->validate([
            'nokk'              => 'required|numeric',
            'nik'               => 'required|numeric',
            'nama'              => 'required',
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

        $validated['statusPenduduk'] = 'Warga Asli';

        Penduduk    ::find  ($penduduk->id)
                    ->update($validated);

        return redirect('/penduduk')->with('success', 'Penduduk berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        Penduduk::destroy($penduduk->id);
        return redirect('/penduduk')->with('success', 'Data Penduduk berhasil dihapus!');
    }

    public function pendudukMohonSurat(Penduduk $penduduk)
    {
        return response()->json([
            'pemohon' => $penduduk
        ]);
    }
    
}
