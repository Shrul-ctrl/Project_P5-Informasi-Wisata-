<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Event;


class MalukuController extends Controller
{
    public function menampilkan()
    {
        $maluku = Wisata::all();
        return view('user_wisata.maluku.index', compact('maluku'));
    }
    public function show($id){
        $event = Event::findOrFail($id);
        $wisata = Wisata::findOrFail($id);
        return view('user_wisata.maluku.show', compact('wisata','event'));    
    }

}
