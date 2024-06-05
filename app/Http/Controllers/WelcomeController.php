<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wisata;

class WelcomeController extends Controller
{
    public function menampilkan(){
        $wisata = Wisata::all();
        return view('welcome',compact('wisata'));
    }

    // public function show($id){
    //     $welcome = Wisata::findOrFail($id);
    //     return view('welcome', compact('welcome'));    
    // }
    

}
