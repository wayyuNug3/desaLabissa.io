<?php

namespace App\Http\Controllers;

use App\Models\Profiledesa;
use Illuminate\Http\Request;

class ProfiledesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('internalDesa.profileDesa', [
            'judul'         => 'Profile Desa',
            'profileDesa'   => Profiledesa::all(),
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
     * @param  \App\Models\Profiledesa  $profiledesa
     * @return \Illuminate\Http\Response
     */
    public function show(Profiledesa $profiledesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profiledesa  $profiledesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Profiledesa $profiledesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profiledesa  $profiledesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profiledesa $profiledesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profiledesa  $profiledesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profiledesa $profiledesa)
    {
        //
    }
}
