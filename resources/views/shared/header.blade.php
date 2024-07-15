<div class="container p-3">
    <div class="row px-5">
        <div class="col-3 flex-grow-1">
            <a class="navbar-brand" href="{{ route('comics.index') }}">
                <img src= "{{ Vite::asset('resources/img/dclogo.png') }}" alt = "Logo" width="60" height="60">
            </a>
        </div>
        <div class="col-5">
            <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('comics.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('comics.create') }}">Crea il tuo fumetto</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- Carousel 1 -->
<div class="container-full">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner h-vw">
            <div class="carousel-item active ">
                <img src="{{ Vite::asset('resources/img/dc.jpg') }}" class="d-block img-size" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources/img/dc2.jpg') }}" class="d-block img-size" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources/img/dc3.jpg') }}" class="d-block img-size" alt="...">
            </div>
        </div>
    </div>
</div>
