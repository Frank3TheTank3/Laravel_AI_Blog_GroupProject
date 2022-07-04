@extends('master')

{{-- @include('nav') --}}
@section('content')

    <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
      welches dieses layout "extended" -->

    <div class="content">
        <div class="section">
            <div class="container">
            <h1 style="font-size: 35px">{{ $article->post_title }}</h1>
            <br>
            <div class="container">
            @foreach ($hashtag as $hash)
                {{ $hash }} <br>
            @endforeach
            <br>
        </div>
    </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    {{ $article->post_title }}
                </div>
                <div class="col">
                    {{-- {{$article->post_text}} --}}
                    @foreach ($paragraph as $para)
                        {{ $para }} <br><br>

                        @if ($loop->first)
                            <img src="/img/{{ $article->img_01 }}" height="150px">
                        @endif
                    @endforeach
                </div>
                <div class="col">
                    <img src="/img/{{ $article->img_02 }}" height="150px">
                </div>
            </div>
        </div>


    </div>



    @section('nav-bar')
        <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
          welches dieses layout "extended" -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    @stop



@endsection
