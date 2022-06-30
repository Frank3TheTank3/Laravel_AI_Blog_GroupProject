@extends('layouts.master')


@section('content')
<!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
  welches dieses layout "extended" -->

<div class="content">
   <div class="titles">
      LISTED MOVIES
   </div>
   <div class="listed-movies">
      <ul class="movies-ul">
         @foreach ($movies as $movie)
         <li class="movies-li">
            <b>
            <img class="img-cover" src="data:image/jpg;base64,{{ chunk_split(base64_encode($movie->cover))}}"></br>
               <div class="movie-title">
                  {{$movie->title}}
               </div>
            </b><br>
         </li>
         @endforeach
      </ul>
   </div>
</div>
@endsection