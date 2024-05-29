<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wisata;
use App\Models\Kategori;
use App\Models\lokasi;
use App\Models\event;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index()
    {
        $wisata = wisata::all();
        return view('wisata.index', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $event = wisata::all();
        $event = event::all();

        $lokasi = wisata::all();
        $lokasi = lokasi::all();

        $kategori = wisata::all();
        $kategori = kategori::all();
        return view('wisata.create', compact('kategori','lokasi','event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wisata = new wisata;
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->id_kategori = $request->id_kategori;
        $wisata->id_lokasi = $request->id_lokasi;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->cover = $request->cover;
        $wisata->id_event = $request->id_event;

         // update img
         if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img-> move('images/wisata', $name);
            $wisata->cover = $name;
        }
        $wisata->save();
        return redirect()->route('wisata.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = wisata::findOrFail($id);
        
        return view('wisata.show', compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = wisata::findOrFail($id);
        $kategori = kategori::all();
        $lokasi = lokasi::all();
        $event = event::all();
        return view('wisata.edit', compact('wisata','kategori','lokasi','event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wisata = wisata::findOrFail($id);
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->id_kategori = $request->id_kategori;
        $wisata->id_lokasi = $request->id_lokasi;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->cover = $request->cover;
        $wisata->id_event = $request->id_event;

        // delete img
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/wisata', $name);
            $wisata->cover = $name;
        }

        $wisata->save();
        return redirect()->route('wisata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = wisata::FindOrFail($id);
        $wisata->delete();
        return redirect()->route('wisata.index');
    }
}
