<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Event;
use App\Models\lokasi;

class JawaController extends Controller
{
    public function menampilkan()
    {
        $jawa = Wisata::all();
        return view('user_wisata.jawa.index', compact('jawa'));
    }

    public function show($id){
        $event = Event::findOrFail($id);
        $wisata = Wisata::findOrFail($id);
        $lokasi = Lokasi::findOrFail($id);
        return view('user_wisata.jawa.show', compact('wisata','event','lokasi'));    
    }
}
