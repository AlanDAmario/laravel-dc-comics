@extends('layouts.app')

@section('main')
    <!-- Card -->
    <div class="container-full bg-dark d-flex justify-content-center">
        <div class="col-7 pt-4">
            <div class="d-flex flex-wrap">
                @foreach ($comics as $comic)
                    <div class="col-2 px-2 resize">
                        <div class="card border border-0 text-bg-dark">
                            <div class="image-container">
                                <a href="{{ route('comics.show', $comic->id) }}">
                                    <img src="{{ $comic->thumb }}" class="card-img-top half-image" alt="{{ $comic->title }}">
                                </a>
                            </div>
                            <p class="fs-title text-uppercase pt-2">{{ $comic->series }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
