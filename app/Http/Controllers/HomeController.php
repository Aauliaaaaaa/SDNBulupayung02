<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Berita;
use App\Models\Contact;
use App\Models\Galeri;
use App\Models\Jumlah;
use App\Models\Ppdb;
use App\Models\Sambutan;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Visi;
use App\Models\Misi;


class HomeController extends Controller
{
    public function index()
    {
      $sliders = Slider::all();
      $about = About::first();
      $visi = Visi::first();
      $misi = Misi::all();
      $jumlahs = Jumlah::all();
      $sambutan = Sambutan::first();
      $beritas = Berita::all();
      $ppdb = Ppdb::first();
      $galeri = Galeri::all();
      $contact = Contact::first();

       return view('home.index', compact(
         'sliders',
         'about',
         'visi',
         'misi',
         'jumlahs',
         'sambutan',
         'beritas',
         'ppdb',
         'galeri',
         'contact',
       ));
    }

    public function tentangkami()
    {
      $about = About::first();
      $sambutan = Sambutan::first();
      $teams = Team::all();
      $contact = Contact::first();
      
       return view('home.tentangkami', compact(
         'about',
         'sambutan',
         'teams',
         'contact',
       ));
    }

    public function visimisi()
    {
      $visi = Visi::first();
      $misi = Misi::all();
      $teams = Team::all();
      $contact = Contact::first();

       return view('home.visimisi', compact(
        'visi',
        'misi',
        'teams',
        'contact',
       ));
    }

    public function sambutan()
    {
      $sambutan = Sambutan::first();
      $contact = Contact::first();

       return view('home.sambutan', compact(
         'sambutan',
         'contact',
       ));
    }

    public function galeri()
    {
      $galeri = Galeri::all();
      $contact = Contact::first();

       return view('home.galeri', compact(
         'galeri',
         'contact',
       ));
    }

    public function ppdb()
    {
      $ppdb = Ppdb::first();
      $contact = Contact::first();

       return view('home.ppdb', compact(
         'ppdb',
         'contact',
       ));
    }

    public function berita()
    {
      $beritas = Berita::all();
      $contact = Contact::first();

       return view('home.berita', compact(
         'beritas',
         'contact',
       ));
    }
    
    public function contact()
    {
      $contact = Contact::first();

       return view('home.contact', compact(
         'contact',
       ));
    }
}
