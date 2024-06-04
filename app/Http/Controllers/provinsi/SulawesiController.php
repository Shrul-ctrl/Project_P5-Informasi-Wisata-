<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Event;

class SulawesiController extends Controller
{
    public function menampilkan()
    {
        $sulawesi = Wisata::all();
        return view('user_wisata.sulawesi.index', compact('sulawesi'));
    }

    public function show($id){
        $event = Event::findOrFail($id);
        $wisata = Wisata::findOrFail($id);
        return view('user_wisata.sulawesi.show', compact('wisata','event'));    
    }
}
