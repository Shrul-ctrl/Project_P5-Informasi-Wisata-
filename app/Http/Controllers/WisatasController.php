<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Kategori;

class WisatasController extends Controller
{
    public function menampilkan(){
        $kategori = kategori::all();
        return view('user_wisata.wisatas',compact('kategori'));
    }

    // public function show($id){
    //     $kategori = Kategori::findOrFail($id);
    //     return view('user_wisata.wisatas', compact('kategori'));    
    // }
}
