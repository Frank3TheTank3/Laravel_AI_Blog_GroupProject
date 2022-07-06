@extends('master')

<!--{{-- @include('nav') --}}-->
@section('content')

<!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
      welches dieses layout "extended" -->

<div class="content">
    
    <div class="section">
        
        <div class="container">
            
            <!-- <h1 style="font-size: 35px">{{ $article->post_title }}</h1>-->
            <br>
            <div class="container">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>       <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            </div>
        </div>

    </div>
    <div class="container">
        
    <div class="row">
    <div class="postitlearticle">{{$article->post_title}}
    </div>
    
    <div class="container">
 
        <div class="row">
            <div class="col-4">

            <div class="postauthor">{{$article->post_author}}</div>
             <div class="postdate">{{$article->post_date}}</div>
             <br>
             <div class="abstractarticle">"{{$article->post_abstract}}"</div><br>
             <div class="hashtag">
                @foreach ($hashtag as $hash)
                {{ $hash }}<br>
                @endforeach
             </div>
            </div>

            <div class="col-6">
                {{-- {{$article->post_text}} --}}

                @foreach ($paragraph as $para)
                {{ $para }} <br><br>

                @if ($loop->first)
                <img src="/img/{{ $article->img_01 }}" height="150px">
                @endif

                @endforeach

            </div>
            <div class="col-2">
                <img src="/img/{{ $article->img_02 }}" height="150px">
            </div>
        </div>
    </div>
    @if (Auth::check()) {
    <div class="p-2 bg-light border rounded-pill text-center">
        <h2>Say something: </h2>



        <form action="/articles" method="post">
            <input type="text" name="title" placeholder="Post-Title">
            <input type="text" name="content" placeholder="Your message...">
            <!-- this blade directive is necessary for all form posts somewhere in between
                            the form tags -->
            @csrf
            @method('post')


            <button class="rounded-pill " type="submit">Submit</button>
        </form>
    </div>
    }
    @endif
    </div>
</div>

@foreach ($comments as $comment)

<div class="p-2 bg-light border rounded-pill text-center">

    <b>
        <img class="mx-auto d-block" style="width: 50px; border-radius: 50%" src="https://avatars.githubusercontent.com/u/98747637?v=4
                    " alt="">
        @if (Auth::check()) {
        <h1>{{Auth::user()->name}} </h1>
        }
        @endif
        <br>
        <h1> {{ $comment->comment_title }}: </h1>
    </b><br>

    {{ $comment->comment_content }}<br>

    {{ $comment->updated_at->diffForHumans() }}
    <form action="/articles/{{ $comment->id }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>


</div>
@endforeach







@endsection