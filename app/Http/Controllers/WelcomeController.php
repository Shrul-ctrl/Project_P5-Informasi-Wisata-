<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wisata;

class WelcomeController extends Controller
{
    public function menampilkan(){
        $welcome = Wisata::all();
        return view('welcome',compact('welcome'));
    }

    // public function show($id){
    //     $welcome = Wisata::findOrFail($id);
    //     return view('welcome', compact('welcome'));    
    // }
    

}
