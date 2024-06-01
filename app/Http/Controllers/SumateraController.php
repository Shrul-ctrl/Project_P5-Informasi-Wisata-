<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Event;

class SumateraController extends Controller
{
    public function menampilkan()
    {
        $sumatera = Wisata::all();
        return view('user_wisata.sumatera.show', compact('sumatera'));
    }

    public function show($id){
        $event = Event::findOrFail($id);
        $wisata = Wisata::findOrFail($id);
        return view('user_wisata.sumatera.show', compact('wisata','event'));    
    }

}
