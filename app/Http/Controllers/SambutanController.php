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
        $sambutans = Sambutan::all(); 

        return view('sambutan.index', compact('sambutans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sambutan.create');
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

        Sambutan::create($input);

        return redirect('/admin/sambutans')->with('message', 'Data berhasil ditambahkan');
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
        return view('sambutan.edit', compact('sambutan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sambutan $sambutan)
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

        $sambutan->update($input);

        return redirect('/admin/sambutans')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sambutan $sambutan)
    {
       $sambutan->delete(); 

       return redirect('/admin/sambutans')->with('message', 'Data berhasil dihapus');
    }
}
