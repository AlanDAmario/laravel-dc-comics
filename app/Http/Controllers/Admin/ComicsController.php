<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ANDIAMO A RICHIAMARE TUTTI I DATI GRAZIE ALL ACCESSO ILLIMITATO 
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new Comic();

        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->type = $data['type'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->artists = json_encode($data['artists']);
        // $comic->writers = json_encode($data['writers']);
        $comic->fill($data);
        $comic->save();

        // Redireziona l'utente alla pagina dei fumetti con un messaggio di successo
        return redirect()->route('comics.index')->with('success', 'Comic added successfully');
    }

    /**
     * Display the specified resource.
     */

    //METODO PER CERCARE IL COMPONENTE TRAMITE ID
    // public function show(string $id)
    //METODO PER CERCARE IL COMPONENTE TRAMITE L ASSEGNAZIONE DEL MODEL
    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($id); METODO COLLEGATO ALLA RICERCA TRAMITE ID

        $artists = json_decode($comic->artists); // Decodifica gli artisti
        $writers = json_decode($comic->writers); // Decodifica gli scrittori

        return view('comics.show', compact('comic', 'artists', 'writers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {

        $artists = json_decode($comic->artists); // Decodifica gli artisti
        $writers = json_decode($comic->writers); // Decodifica gli scrittori

        return view('comics.edit', compact('comic', 'artists', 'writers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        // Redireziona l'utente all pagina dei fumetti con un messaggio di successo
        return redirect()->route('comics.show',$comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
