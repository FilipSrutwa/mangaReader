<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @if(isset($title))
        {{$title}}
        @else
        MangaReader
        @endif
    </title>

    <!--BOOTSTRAP ASSETS!-->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</head>

<body class="bg-dark">
    <div class="container-fluid">
        <div class="container text-center bg-white mt-2">
            <h1 class="text-warning">MANGAREADER</h1>
            <div class="d-flex flex-row">
                <a href="{{URL::to('/');}}">MangaReader >> </a>
                <a href="#">Manga name >> </a>
                <a href="#">chapter number</a>
            </div>
        </div>
        <div class="container d-flex flex-column mt-2">
            @foreach($pages as $page)
            <div class="row my-1 p-1 bg-white rounded">
                <img src={{ asset($pagesPath.'/'.$page) }} class="img-fluid" loading="lazy">
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>