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
@foreach ($messages as $message)
        <div class="p-2 bg-light border">
            <div class="d-flex m-4">
                <b><img class="m-2" style="width: 50px; border-radius: 50%"
                        src="https://avatars.githubusercontent.com/u/98747637?v=4
                        " alt="">
                    <!-- this link to the message details is created dynamically
                                and will point to /messages/1 for the first message -->
                    <a href="/message/{{ $message->id }}">{{ $message->title }}:</a>

                </b><br>
            </div>