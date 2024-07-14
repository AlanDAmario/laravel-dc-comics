@extends('layouts.app')

@section('main')
    <div class="container-full bg-dark">
        <div class="col-12 p-5">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->description }}</p>
                            <p class="card-text">Artists:
                                @foreach (json_decode($comic->artists) as $artist)
                                    {{ $loop->first ? '' : ', ' }}
                                    {{ $artist }}
                                @endforeach
                            </p>
                            <div class="d-flex justify-content-end pt-5 mt-5 gap-3">
                                <a href="{{ route('comics.index') }}">
                                    <button type="button" class="btn btn-outline-warning">Torna alla selezione fumetti
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
