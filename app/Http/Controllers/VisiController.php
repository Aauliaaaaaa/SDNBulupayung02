<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visi = Visi::first();

        return view('visi', compact('visi'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Visi $visi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visi $visi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $visi = Visi::find($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
           
        ]);

        $input = $request->all();

        $visi->update($input);

        return redirect('/admin/visi')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visi $visi)
    {
        //
    }
}
