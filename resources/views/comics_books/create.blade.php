@extends('layouts.app')

@section('main')
    <div class="container-fluid bg-dark ">
        <form action="{{ route('comics.store') }}" method="POST">
            {{-- //è UN TOKEN CHE GENERA LARAVEL PER ASSICURARSI CHE LE CHIAMATA POST AVVENGA TRAMITE IL FORM DEL SITO, DA INSERIRE IN OGNI PARTE DEL SITO --}}
            @csrf
            <div class="row justify-content-center">
                <div class="col-7 p-4">
                    <div class="my-4">

                        <input type="text" class="form-control my-2" placeholder="Inserisci titolo" name="title">
                        <input type="text" class="form-control my-2" placeholder="Data di rilascio" name="sale_date">
                        <input type="text" class="form-control my-2" placeholder="Serie" name="series">
                        <input type="text" class="form-control my-2" placeholder="Artista" name="artists[]">
                        <input type="text" class="form-control my-2" placeholder="Scrittore" name="writers[]">
                        <input type="number" class="form-control my-2" placeholder="Prezzo" name="price">
                        <textarea class="form-control" rows="3" name="description" placeholder="Inserisci descrizione"></textarea>
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
                        <input type="text" class="form-control my-2" placeholder="Link dell'immagine" name="thumb">
                    </div>
                    <div class="py-4">
                        <button class="btn btn-outline-success">Aggiungi il tuo fumetto</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
