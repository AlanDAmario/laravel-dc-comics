@extends('layouts.app')

@section('main')
    <div class="container-fluid bg-dark ">
        <h1 class="text-center text-white py-3">Modifica il tuo fumetto</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            {{-- //è UN TOKEN CHE GENERA LARAVEL PER ASSICURARSI CHE LE CHIAMATA POST AVVENGA TRAMITE IL FORM DEL SITO, DA INSERIRE IN OGNI PARTE DEL SITO --}}
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="col-7 p-4">
                    <div class="my-4">
                        <input type="text" class="form-control my-2" placeholder="Inserisci titolo" name="title"
                            value="{{ $comic->title }}">
                        <input type="text" class="form-control my-2" placeholder="Data di rilascio" name="sale_date"
                            value="{{ $comic->sale_date }}">
                        <input type="text" class="form-control my-2" placeholder="Serie" name="series"
                            value="{{ $comic->series }}">
                        <input type="text" class="form-control my-2" placeholder="Artista" name="artists[]"
                            value="{{ implode(', ', json_decode($comic->artists, true)) }}">
                        <input type="text" class="form-control my-2" placeholder="Scrittore" name="writers[]"
                            value="{{ implode(', ', json_decode($comic->writers, true)) }}">
                        <input type="text" class="form-control my-2" placeholder="Prezzo" name="price"
                            value="{{ str_replace('$', '', $comic->price) }} ">
                        <textarea class="form-control" rows="7" name="description">{{ $comic->description }} </textarea>
                    </div>
                    <div class="mb-4">
                        <input class="form-control" list="datalistOptions" placeholder="Tipo di fumetto" name="type">
                        <datalist id="datalistOptions">
                            <option value="Azione">
                            <option value="Commedia">
                            <option value="Thriller">
                            <option value="Fantasy">
                            <option value="Altro">
                        </datalist>
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control my-2" placeholder="Link dell'immagine" name="thumb"
                            value="{{ $comic->thumb }}">
                    </div>
                    <div class="py-4">
                        <button class="btn btn-outline-success">Modifica il tuo fumetto</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
