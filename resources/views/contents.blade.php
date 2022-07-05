@extends('master')

{{-- @include('nav') --}}
@section('content')

<!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
  welches dieses layout "extended" -->

<div class="content">
   <div class="section" style="font-size: 35px">
    <div class="container">
     LATEST NEWS
   </div>
</div>
   @foreach ($articles as $article)

   <a href="/articles/{{ $article->id }}">

   <div class="container">

    <div class="row">

      <div class="col">
        {{$article->post_title}}
      </div>
      <div class="col">
        {{$article->post_abstract}}
      </div>
      <div class="col">
        <img src="img/{{$article->img_01}}" height="150px" >
      </div>

    </div>

  </div>

</a>
  @endforeach


</div>







@endsection

