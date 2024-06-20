<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Kategori;
use App\Models\event;
use App\Models\lokasi;

class WisatasController extends Controller
{
    public function menampilkan(){
        $kategori = kategori::all();
        $wisata = wisata::all();
        return view('user_wisata.wisatas',compact('kategori','wisata'));
    }

    // public function show($id){
    //     $event = Event::findOrFail($id);
    //     $wisata = Wisata::findOrFail($id);
    //     $lokasi = Lokasi::findOrFail($id);
    //     $kategori  = Kategori::findOrFail($id);
    //     return view('user_wisata.jawa.show', compact('kategori','wisata','lokasi','event'));    
    // }
}
