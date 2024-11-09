<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
            // Ambil kategori dari parameter URL
    $category = $request->get('category', 'all'); // Default filter ke 'all'
    
    // Jika kategori bukan 'all', filter berdasarkan kategori
    if ($category == 'all') {
        $galeri = Galeri::all();
    } else {
        $galeri = Galeri::where('category', $category)->get();
    }
    
    return view('galeri.index', compact('galeri'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galeri.create');
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
            'category' => 'required', // Tambahkan validasi kategori
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }
    
        Galeri::create($input);
    
        return redirect('/admin/galeris')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        return view('galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image',
            'category' => 'required', // Validasi kategori
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }
    
        $galeri->update($input);
    
        return redirect('/admin/galeris')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
       $galeri->delete(); 

       return redirect('/admin/galeris')->with('message', 'Data berhasil dihapus');
    }

}
