<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // akses tabel Falkutas
        $result = Fakultas:: all(); // SELECT * FROM Falkutas
        //dd($result); //dump data
        return view('fakultas.index', compact('result'));// kirim data ke view
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request);
       $input = $request->validate([
        'nama_fakultas' => 'required | unique:fakultas',
        'singkatan' => 'required'
       ]);

       Fakultas::create($input);

       return redirect()->route('fakultas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakultas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Fakultas $fakultas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $fakultas)
    {
       //dd($fakultas);
       $fakultas = Fakultas::find($fakultas, 'id');
       $fakultas->delete();
       return redirect()->route('fakultas.index');
    }
}
