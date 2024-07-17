{{-- @extends('layouts.app')

@section('main')
    <!-- Card -->
    <div class="container-full bg-index d-flex justify-content-center">
        <div class="col-7 pt-4">
            <div class="d-flex flex-wrap">
                @foreach ($comics as $comic)
                    <div class="col-2 py-3 px-2 resize">
                        <div class="card border border-0 text-bg-dark">
                            <div class="image-container">
                                <a href="{{ route('comics.show', $comic->id) }}">
                                    <img src="{{ $comic->thumb }}" class="card-img-top half-image" alt="{{ $comic->title }}">
                                </a>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">X</button>
                                </form>
                            </div>
                            <p class="fs-title text-uppercase pt-2">{{ $comic->series }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection --}}
@extends('layouts.app')

@section('main')
    <!-- Card -->
    <div class="container-full bg-index d-flex justify-content-center">
        <div class="col-7 pt-4">
            <div class="d-flex flex-wrap">
                @foreach ($comics as $comic)
                    <div class="col-2 py-3 px-2 resize">
                        <div class="card border border-0 text-bg-dark">
                            <div class="image-container">
                                <a href="{{ route('comics.show', $comic->id) }}">
                                    <img src="{{ $comic->thumb }}" class="card-img-top half-image" alt="{{ $comic->title }}">
                                </a>
                            </div>
                            <div class="card-body">
                                <p class="fs-title text-uppercase">{{ $comic->series }}</p>

                                <!-- Form di eliminazione -->
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-custom-size btn-outline-danger ">Cancella</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
