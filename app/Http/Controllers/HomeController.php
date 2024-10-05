<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       return view('home.index');
    }

    public function tentangkami()
    {
       return view('home.tentangkami');
    }

    public function visimisi()
    {
       return view('home.visimisi');
    }

    public function sambutan()
    {
       return view('home.sambutan');
    }

    public function galeri()
    {
       return view('home.galeri');
    }

    public function ppdb()
    {
       return view('home.ppdb');
    }

    public function berita()
    {
       return view('home.berita');
    }
    
    public function contact()
    {
       return view('home.contact');
    }
}
