<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
</div>

<!-- head - commented by lu-meili-->
<head>

  <!-- Scripts -->
  <script src="{{asset('js/app.js')}}" defer></script>
  <script src="{{asset('js/chat.js')}}" defer></script>
  <!-- Styles -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <link href="{{asset('css/chatbot.css')}}" rel="stylesheet">
  <link href="{{asset('css/mainstyles.css')}}" rel="stylesheet">

</head>

<!-- body opens here - commented by lu-meili-->

<body>

  {{-- @section('nav-bar')
    This is the master sidebar.
    @show --}}

  {{-- @yield('nav-bar') --}}

</div>
  <!-- banner - commented by lu-meili-->
  <header class="fixed">
    
    <div>
      <img src="{{('img/header-banner.png')}}" alt="this is a banner">
    </div>
    <div class="d-flex justify-content-center">
      <!-- deleted featured - commented by lu-meili-->
      <!--<a href="/"><img id="logo" class="img-responsive"  src="img/favicon.png" data-bs-hover-animate="pulse" alt="logo" style="height: 48px;"></a>-->
      <hr>
      <div class="heading">
        Artifical Intelligence Digital News
      </div>
      <hr>
    </div>

    <!-- navbar - commented by lu-meili-->
    <nav class="nav justify-content-center" id="navbar">
      <div class="nav">
        <ul class="nav justify-content-center">
          <li>
            <a href="/articles" class="nav-link">HOME</a>
          </li>
          <li>
            <a href="/" class="nav-link ">ABOUT US</a>
          </li>
          <li>
            <a href="{{ route('register') }}" class="nav-link ">REGISTER</a>
          </li>
          <li>
            <a href="/login" class="nav-link ">LOG IN</a>
          </li>
          <li>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('LOG OUT') }}
                </x-dropdown-link>
            </form>

          </li>
        </ul>
      </div>
    </nav>


  </header>

 <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt, welches dieses layout "extended" -->
@yield('content')

 <div class="bodycontainer">
    <div id="container" class="container">
        <img src="https://cdn-icons-png.flaticon.com/512/2885/2885504.png" height="200vh" alt="Chatbot clipart">
         <div id="chat" class="chat">
          <div id="messages" class="messages"></div>
          <input id="input" type="text" placeholder="Write something..." autocomplete="off" autofocus="true" />
        </div>
      </div>
    </div>

<!--FOOTER-->
<footer>
  <video src="{{('img/footerVid.mp4')}}" class="footer" type="video/mp4" class="d-block w-100" autoplay loop muted>
  </video>
  <b>&copy; #AI Team - Opportunity Program - Zürich, July 7th 2002
   </b>
  </div>
</footer>
   
    
  

</body>

</html>