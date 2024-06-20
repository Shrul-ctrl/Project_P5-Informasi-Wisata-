<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Event;
use App\Models\Kategori;
use App\Models\lokasi;

class WisatassController extends Controller
{
    // public function menampilkan()
    // {
    //     $jawa = Wisata::all();
    //     return view('user_wisata.wisatas.index', compact('jawa'));
    // }

    public function show($id){
        $event = Event::findOrFail($id);
        $wisata = Wisata::findOrFail($id);
        $lokasi = Lokasi::findOrFail($id);
        // $kategori = Kategori::findOrFail($id);
        return view('user_wisata.wisatas.show', compact('wisata','event','lokasi'));    
    }
}
