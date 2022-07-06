@extends('master')
@section('content')

<!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
  welches dieses layout "extended" -->

<div class="content">
  <div class="section" style="font-size: 30px">
    <div class="container header-height">
      LATEST NEWS
    </div>
  </div>
  @foreach ($articles as $article)

  <a href="/articles/{{ $article->id }}">

    <div class="container p-4 containerheight">

      <div class="row">

        <div class="col">
          <div class="postitle">{{$article->post_title}}</div>
          <div class="postauthor">{{$article->post_author}}</div>
          <div class="postdate">{{$article->post_date}}</div>
         
        </div>
        
        <div class="col postabstract">"{{$article->post_abstract}}"</div>
        
        <div class="col postimage"><img src="img/{{$article->img_01}}" height="150px"></div>

      </div>

    </div>

  </a>
  @endforeach


</div>





@endsection