<?php

namespace App\Http\Controllers;

use App\Models\PPDB;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ppdbs = PPDB::all(); 

        return view('ppdb.index', compact('ppdbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ppdb.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Ppdb::create($input);

        return redirect('/admin/ppdbs')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(PPDB $ppdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ppdb $ppdb)
    {
        return view('ppdb.edit', compact('ppdb'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PPDB $ppdb)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }
        else{
            unset($input['image']);
        }

        $ppdb->update($input);

        return redirect('/admin/ppdbs')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PPDB $ppdb)
    {
       $ppdb->delete(); 

       return redirect('/admin/ppdbs')->with('message', 'Data berhasil dihapus');
    }
}
