<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();

        return view('about', compact('about'));
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
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $about = About::find($id);

        $request->validate([
            'judul' => 'required',
            'subjudul' => 'required',
            'deskripsi_1' => 'required',
            'deskripsi_2' => 'required',
            'kelebiahan_1' => 'required',
            'kelebiahan_2' => 'required',
            'kelebiahan_3' => 'required',
            'kelebiahan_4' => 'required',
        ]);

        $input = $request->all();

        $about->update($input);

        return redirect('/admin/about')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
