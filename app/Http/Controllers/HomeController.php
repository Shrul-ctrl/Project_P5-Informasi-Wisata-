<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Event;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $wisata = Wisata::count();
        $event = Event::count();
        $kategori = Kategori::count();
        $lokasi = Lokasi::count();
        $user = User::count();
        return view('home',compact('wisata','event','kategori','lokasi','user'));
    }
}
