<?php

namespace App\Http\Controllers;

use App\Models\Kitap;
use Illuminate\Http\Request;

class KitapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kitaplar = Kitap::all();
        return view('kitap.index', compact('kitaplar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kitaplar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kitap = new Kitap;
        $kitap->isim = $request->isim;
        $kitap->yazar = $request->yazar;
        $kitap->durum = $request->durum;
        $kitap->save();

        return redirect('/kitaplar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kitap $kitap)
    {
        return view('kitaplar.show', compact('kitap'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kitap $kitap)
    {
        return view('kitaplar.edit', compact('kitap'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kitap $kitap)
    {
        $kitap->isim = $request->isim;
        $kitap->yazar = $request->yazar;
        $kitap->durum = $request->durum;
        $kitap->save();

        return redirect('/kitaplar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kitap $kitap)
    {
        $kitap->delete();
        return redirect('/kitaplar');
    }
}
