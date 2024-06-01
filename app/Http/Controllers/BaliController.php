<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Event;

class BaliController extends Controller
{
    public function menampilkan()
    {
        $bali = Wisata::all();
        return view('user_wisata.bali.index', compact('bali'));
    }

    public function show($id){
        $event = Event::findOrFail($id);
        $wisata = Wisata::findOrFail($id);
        return view('user_wisata.bali.show', compact('wisata','event'));    
    }
}
