<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mangas = Manga::all();
        // dd($trains);
        return view('mangas.index', compact('mangas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("mangas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->all();
        //
        $manga = new Manga();
        $manga->title = $formData['title'];
        $manga->autor = $formData['autor'];
        $manga->genre = $formData['genre'];
        $manga->publisher = $formData['publisher'];
        $manga->price = $formData['price'];
        $manga->thumbs = $formData['thumbs'];
        $manga->description = $formData['description'];
        $manga->save();

        return redirect()->route('manga.show', ['id'=>$manga->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $manga = Manga::findOrFail($id);
        return view("mangas.show", compact("manga"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $manga = Manga::findOrFail($id);
        return view('mangas.edit', compact('manga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $formData = $request->all();
        $manga = Manga::findOrFail($id);

        $manga->update($formData);

        return redirect()->route("manga.show", [ "id" => $manga->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $manga = Manga::findOrFail($id);
        $manga->delete();

        return redirect()->route('mangas');
    }
}
