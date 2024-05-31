<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class WisatasController extends Controller
{
    public function menampilkan(){
        $wisatas = Wisata::all();
        return view('user_wisata.wisatas',compact('wisatas'));
    }
}
