<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Event;

class KalimantanController extends Controller
{
    public function menampilkan()
    {
        $kalimantan = Wisata::all();
        return view('user_wisata.kalimantan.index', compact('kalimantan'));
    }

    public function show($id){
        $event = Event::findOrFail($id);
        $wisata = Wisata::findOrFail($id);
        return view('user_wisata.kalimantan.show', compact('wisata','event'));    
    }

}
