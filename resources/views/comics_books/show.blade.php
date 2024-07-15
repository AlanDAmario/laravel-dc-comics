@extends('layouts.app')

@section('main')
    <div class="container-full bg-dark">
        <div class="col-12 p-5">
            <div class="card">
                <div class="row">
                    <div class="col-md-4 p-3">
                        <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title py-2">{{ $comic->title }}</h5>
                            <p class="card-text py-2">{{ $comic->description }}</p>
                            <p class="card-text py-1">Serie : {{ $comic->series }}</p>
                            <p class="card-text py-1">Vendita : {{ $comic->sale_date }}</p>
                            <p class="card-text pt-3">Price : {{ $comic->price }}</p>
                            <p class="card-text py-1">Artists :
                                @foreach (json_decode($comic->artists) as $artist)
                                    {{ $loop->first ? '' : ', ' }}
                                    {{ $artist }}
                                @endforeach
                            </p>
                            <p class="card-text py-1">Writers :
                                @foreach (json_decode($comic->writers) as $writer)
                                    {{ $loop->first ? '' : ', ' }}
                                    {{ $writer }}
                                @endforeach
                            </p>
                            <div class="d-flex justify-content-end pt-4 mt-5 gap-3">
                                <a href="{{ route('comics.index') }}">
                                    <button type="button" class="btn btn-outline-warning">Torna alla selezione fumetti
                                    </button>
                                </a>
                                <a href="{{ route('comics.create') }}">
                                    <button type="button" class="btn btn-outline-danger">Aggiungi il tuo fumetto
                                        preferito!!
                                    </button>
                                </a>
                                <a href="{{ route('home') }}">
                                    <button type="button" class="btn btn-outline-info">Torna alla Home </button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
