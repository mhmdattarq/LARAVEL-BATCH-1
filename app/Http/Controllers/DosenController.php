<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('pages.dosen.TabelDosen', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pages.dosen.FormDosen');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        Dosen::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('tabel.dosen');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
