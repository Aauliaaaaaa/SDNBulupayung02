<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use Illuminate\Http\Request;

class MisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $misis = Misi::all(); 

        return view('misi.index', compact('misis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('misi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
        ]);

        $input = $request->all();

        Misi::create($input);

        return redirect('/admin/misis')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Misi $misi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Misi $misi)
    {
        return view('misi.edit', compact('misi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Misi $misi)
    {
        $request->validate([
            'description' => 'required',
        ]);

        $misi->update($request->all());

        return redirect('/admin/misis')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Misi $misi)
    {
        $misi->delete(); 

        return redirect('/admin/misis')->with('message', 'Data berhasil dihapus');
    }
}
