<?php

namespace App\Http\Controllers;

use App\Models\Sambutan;
use Illuminate\Http\Request;

class SambutanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sambutan = Sambutan::first();

        return view('sambutan', compact('sambutan'));
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
    public function show(Sambutan $sambutan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sambutan $sambutan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sambutan = Sambutan::find($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
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

        $sambutan->update($input);

        return redirect('/admin/sambutan')->with('message', 'Data berhasil diedit');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sambutan $sambutan)
    {
        //
    }
}
