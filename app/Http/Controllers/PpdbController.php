<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ppdb = Ppdb::first();

        return view('ppdb', compact('ppdb'));
 
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
    public function show(Ppdb $ppdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ppdb $ppdb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ppdb = Ppdb::find($id);

        $request->validate([
            'name' => 'required',
            'logo' => 'image',
        ]);

        $input = $request->all();

        if ($image = $request->file('logo')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['logo'] = $imageName;
        } else {
            unset($input['logo']);
        }

        $ppdb->update($input);

        return redirect('/admin/ppdb')->with('message', 'Data berhasil diedit');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ppdb $ppdb)
    {
        //
    }
}
