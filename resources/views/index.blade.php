@extends('layouts.mainLayout')

@section('content')
<div class="container-fluid m-0 p-0 overflow-hidden">
    <div id="mangaCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="d-flex align-items-center justify-content-center">
                    <span class="mx-2">
                        <div class="card" style="width: 13rem;">
                            <img src={{ asset('img/mangaexample1.jpg') }} class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">Manga Title</h5>
                                <a href="#" class="btn btn-warning">Read</a>
                            </div>
                        </div>
                    </span>
                    <span class="mx-2">
                        <div class="card" style="width: 13rem;">
                            <img src={{ asset('img/mangaexample1.jpg') }} class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">Manga Title</h5>
                                <a href="#" class="btn btn-warning">Read</a>
                            </div>
                        </div>
                    </span>
                    <span class="mx-2">
                        <div class="card" style="width: 13rem;">
                            <img src={{ asset('img/mangaexample1.jpg') }} class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">Manga Title</h5>
                                <a href="#" class="btn btn-warning">Read</a>
                            </div>
                        </div>
                    </span>
                    <span class="mx-2">
                        <div class="card" style="width: 13rem;">
                            <img src={{ asset('img/mangaexample1.jpg') }} class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">Manga Title</h5>
                                <a href="#" class="btn btn-warning">Read</a>
                            </div>
                        </div>
                    </span>
                    <span class="mx-2">
                        <div class="card" style="width: 13rem;">
                            <img src={{ asset('img/mangaexample1.jpg') }} class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">Manga Title</h5>
                                <a href="#" class="btn btn-warning">Read</a>
                            </div>
                        </div>
                    </span>
                    <span class="mx-2">
                        <div class="card" style="width: 13rem;">
                            <img src={{ asset('img/mangaexample1.jpg') }} class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">Manga Title</h5>
                                <a href="#" class="btn btn-warning">Read</a>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="10000">
                <div class="d-flex align-items-center justify-content-center">
                    <span class="mx-2">
                        <div class="card" style="width: 13rem;">
                            <img src={{ asset('img/mangaexample1.jpg') }} class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">Manga Title</h5>
                                <a href="#" class="btn btn-warning">Read</a>
                            </div>
                        </div>
                    </span>
                    <span class="mx-2">
                        <div class="card" style="width: 13rem;">
                            <img src={{ asset('img/mangaexample1.jpg') }} class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">Manga Title</h5>
                                <a href="#" class="btn btn-warning">Read</a>
                            </div>
                        </div>
                    </span>
                    <span class="mx-2">
                        <div class="card" style="width: 13rem;">
                            <img src={{ asset('img/mangaexample1.jpg') }} class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">Manga Title</h5>
                                <a href="#" class="btn btn-warning">Read</a>
                            </div>
                        </div>
                    </span>
                    <span class="mx-2">
                        <div class="card" style="width: 13rem;">
                            <img src={{ asset('img/mangaexample1.jpg') }} class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">Manga Title</h5>
                                <a href="#" class="btn btn-warning">Read</a>
                            </div>
                        </div>
                    </span>
                    <span class="mx-2">
                        <div class="card" style="width: 13rem;">
                            <img src={{ asset('img/mangaexample1.jpg') }} class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">Manga Title</h5>
                                <a href="#" class="btn btn-warning">Read</a>
                            </div>
                        </div>
                    </span>
                    <span class="mx-2">
                        <div class="card" style="width: 13rem;">
                            <img src={{ asset('img/mangaexample1.jpg') }} class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">Manga Title</h5>
                                <a href="#" class="btn btn-warning">Read</a>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#mangaCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mangaCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="row text-center gx-2 mt-3 p-2 mx-2">
        <div class="col">
            <div class="shadow-lg p-3 mb-5 bg-body rounded">
                <h2>Latest manga</h2>
                <div class="row">
                    <div class="col">
                        <div class="d-flex flex-row my-1">
                            <img src={{ asset('img/mangaexample1.jpg') }} style="width: 100px; height:150px;">
                            <div class="d-flex flex-column p-1">
                                <h5>Title</h5>
                                <a href="#">ch.1</a>
                                <a href="#">ch.2</a>
                                <a href="#">ch.3</a>
                                <a href="#">ch.4</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-row my-1">
                            <img src={{ asset('img/mangaexample1.jpg') }} style="width: 100px; height:150px;">
                            <div class="d-flex flex-column p-1">
                                <h5>Title</h5>
                                <a href="#">ch.1</a>
                                <a href="#">ch.2</a>
                                <a href="#">ch.3</a>
                                <a href="#">ch.4</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="shadow-lg p-3 mb-5 bg-body rounded">
                <h2>Reccomended manga</h2>
                <div class="d-flex flex-column text-start">
                    <ol>
                        <li><a href="#">Manga name</a></li>
                        <li><a href="#">Manga name</a></li>
                        <li><a href="#">Manga name</a></li>
                        <li><a href="#">Manga name</a></li>
                        <li><a href="#">Manga name</a></li>
                        <li><a href="#">Manga name</a></li>
                        <li><a href="#">Manga name</a></li>
                        <li><a href="#">Manga name</a></li>
                        <li><a href="#">Manga name</a></li>
                        <li><a href="#">Manga name</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection