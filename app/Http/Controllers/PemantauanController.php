<?php

namespace App\Http\Controllers;

use App\Models\Pemantauan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePemantauanRequest;
use App\Http\Requests\UpdatePemantauanRequest;

class PemantauanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePemantauanRequest $request)
    {
        $this->validate($request,[
    		'lokasi' => 'required',
    		'latitude' => 'required',
            'longitude' => 'required',
            'data' => 'required'
    	]);

        $request = Pemantauan::create([
            'lokasi' => $request->lokasi,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'data' => $request->data
        ]);

        return redirect('/tabel');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemantauan $pemantauan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemantauan $pemantauan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePemantauanRequest $request, Pemantauan $pemantauan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemantauan $pemantauan)
    {
        //
    }
}
