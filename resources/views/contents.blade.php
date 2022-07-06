@extends('master')
@section('content')
<div class="content">

  <!-- grid title -->
  <div class="section" style="font-size: 30px">

    <div class="container header-height">
      LATEST NEWS
    </div>

  </div>

  @foreach ($articles as $article)

  <a href="/articles/{{ $article->id }}">

    <div class="container p-4 containerheight">

      <div class="row">
        <!-- column 01 - title, author. date fields - commented by lu-meili-->
        <div class="col">
          <div class="postitle">{{$article->post_title}}</div>
          <div class="postauthor">{{$article->post_author}}</div>
          <div class="postdate">{{$article->post_date}}</div>
        </div>
        <!-- column 02 - text abstract- commented by lu-meili-->
        <div class="col postabstract">"{{$article->post_abstract}}"</div>

        <!-- column 03 - article main image - commented by lu-meili-->
        <div class="col postimage"><img src="img/{{$article->img_01}}" height="150px"></div>

      </div>

    </div>

  </a>
  @endforeach

</div>

@endsection