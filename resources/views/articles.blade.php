@extends('master')


@section('content')
<!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
  welches dieses layout "extended" -->

<div class="content">
   <div class="section">
     LATEST NEWS
   </div>
   <div class="">
      <ul class="articles">
         @foreach ($articles as $article)
         <li class="articles-li">
            <b>
               <div class="title">
                  {{$article->post_title}}
               </div>
               <div class="content">
               {{$article->post_abstract}}
               </div>
            <img class="img-cov" src="data:image/jpg;base64,{{ chunk_split(base64_encode($article->img_01))}}"></br></b><br>
         </li>
         @endforeach
      </ul>
   </div>
</div>
@endsection
