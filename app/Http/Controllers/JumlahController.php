<?php

namespace App\Http\Controllers;

use App\Models\Jumlah;
use Illuminate\Http\Request;

class JumlahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahs = Jumlah::all(); 

        return view('jumlah.index', compact('jumlahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jumlah.create');
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

        Jumlah::create($input);

        return redirect('/admin/jumlahs')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jumlah $jumlah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jumlah $jumlah)
    {
        return view('jumlah.edit', compact('jumlah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jumlah $jumlah)
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

        $jumlah->update($input);

        return redirect('/admin/jumlahs')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jumlah $jumlah)
    {
       $jumlah->delete(); 

       return redirect('/admin/jumlahs')->with('message', 'Data berhasil dihapus');
    }
}
