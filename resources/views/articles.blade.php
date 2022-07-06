@extends('master')


@section('content')
<!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
  welches dieses layout "extended" -->

<div class="content" style="margin-left: 0; padding-left:0;">
   <div class="section" style="padding-left: 19rem;font-weight:bolder; font-size:2rem;">
      LATEST NEWS
   </div>

   <div class="container">
      @foreach ($articles as $article)

      <div class="row" id="article">
         <div class="col-sm" id="title" style="color: #5e17eb; padding:2rem; font-weight:bolder; font-size:1.5rem;">
            {{$article->post_title}}
         </div>
         <div class="col-sm" id="text" style="padding:2rem;">
            {{$article->post_abstract}}
         </div>
         <div class="col-sm" style="padding:2rem;">
            <img class="img-cov" src="data:image/jpg;base64,{{ chunk_split(base64_encode($article->img_01))}}"></br></b><br>
         </div>
      </div>
      @endforeach
   </div>
</div>
   @endsection