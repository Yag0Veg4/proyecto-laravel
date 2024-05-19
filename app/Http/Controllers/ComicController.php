<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comicIndex', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('comicCreate', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comic = new Comic();
        $comic->nombre = $request->nombre;
        $comic->precio = $request->precio;
        $comic->editorial = $request->editorial;
        $comic->save();

        $comic->categorias()->attach($request->categorias);


        Session()->flash('success', 'Se ha guardado con éxito');
        return redirect('/comic');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('/comicShow', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $categorias = Categoria::all();
        return view('comicEdit', compact('categorias', 'comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $comic->nombre = $request->nombre;
        $comic->precio = $request->precio;
        $comic->editorial = $request->editorial;
        $comic->save();

        if($request->has('categorias')) {
            $comic->categorias()->sync($request->categorias);
        } else {
            $comic->categorias()->detach();
        }

        return redirect('/comic');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        Session()->flash('sucess', 'Se ha eliminado co éxito');
        return redirect('/comic');
    }
}
