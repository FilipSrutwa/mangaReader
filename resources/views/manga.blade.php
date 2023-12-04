@extends('layouts.mainLayout')

@section('content')
<div class="container-fluid">
    <div id="mangaCarousel" class="carousel carousel-dark slide mb-2" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="d-flex align-items-center justify-content-center">
                    <span class="mx-2">
                        <div class="card" style="width: 13rem;">
                            <img src={{ asset('img/mangaexample1.jpg') }} class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">Manga Title</h5>
                                <a href={{URL::to('/SingleManga/1');}} class="btn btn-warning">Read</a>
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
    <div class="row">
        <div class="col">
            <div class="shadow-lg p-3 mb-5 bg-body rounded">
                <div class="d-flex flex-row my-1">
                    <img src={{ asset($img) }} class="img-thumbnail">
                    <div class="d-flex flex-column p-1">
                        <h1>{{$mangaTitle}}</h1>
                        <h3>Artist: {{$artist}}</h3>
                        <h3>Genre: {{$genre}}</h3>
                        <h3>Status:
                            @if($status == 'Completed')
                            <span class="text-success">completed</span>
                            @elseif($status == 'Ongoing')
                            <span class="text-warning">Ongoing</span>
                            @else
                            <span class="text-danger">Something went wrong</span>
                            @endif
                        </h3>
                        <h3>Chapters count: {{$chaptersCount}}</h3>
                        <h3>Last updated: {{$updatedAt}}</h3>
                        <div class="col">
                            <a href="#" class="btn btn-lg btn-outline-warning">Read latest</a>
                            <a href="#" class="btn btn-lg btn-outline-warning">Read first</a>
                            <a href="#" class="btn btn-lg btn-outline-warning">Bookmark</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column mt-2 overflow-scroll" style="height: 25vh; overflow-x:hidden !important;">
                    <a href="#" class="my-1 h5 text-primary">Chapter: 1</a>
                    <a href="#" class="my-1 h5 text-primary">Chapter: 1</a>
                    <a href="#" class="my-1 h5 text-primary">Chapter: 1</a>
                    <a href="#" class="my-1 h5 text-primary">Chapter: 1</a>
                    <a href="#" class="my-1 h5 text-primary">Chapter: 1</a>
                    <a href="#" class="my-1 h5 text-primary">Chapter: 1</a>
                    <a href="#" class="my-1 h5 text-primary">Chapter: 1</a>
                    <a href="#" class="my-1 h5 text-primary">Chapter: 1</a>
                    <a href="#" class="my-1 h5 text-primary">Chapter: 1</a>
                    <a href="#" class="my-1 h5 text-primary">Chapter: 1</a>
                    <a href="#" class="my-1 h5 text-primary">Chapter: 1</a>
                    <a href="#" class="my-1 h5 text-primary">Chapter: 1</a>
                    <a href="#" class="my-1 h5 text-primary">Chapter: 1</a>
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
    <div class="col-md-8 shadow-lg p-3 mb-5 bg-body rounded">
        <h1 class="text-center">Comments</h1>
        <div class="d-flex flex-row my-1">
            <img src={{ asset('img/mangaexample1.jpg') }} style="width: 100px; height:100px;">
            <div class="d-flex flex-column">
                <h5>Comment Author</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet nam asperiores a hic odio? Similique magnam totam recusandae error velit eius, culpa consectetur? Eveniet adipisci minus sapiente? Laborum, labore illo.</p>
            </div>
        </div>
    </div>
</div>
@endsection