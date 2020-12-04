
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="F:/insider_clone//css/all.min.css"> 
  <script src="https://kit.fontawesome.com/ba724881a4.js" crossorigin="anonymous"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{asset('css/navbar.css')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>





  <div class="menu">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="/event"><img  id="logoname" src="https://insider.in/go-out-at-home-digital-events/images/insiderLogoWhite.png" alt=""></a>
    </div>
    <ul class="nav navbar-nav" id="first">
      
      <li class="links"><a href="/events-popular">Popular Events</a></li>
      <li class="links"><a href="/events-free">Free Events</a></li>
      <li class="links"><a href="#">Today's Events</a></li>
    </ul>
    <span class="navbar-text">

    <ul class="navbar-nav" id="second">
      
      <li class="links" id="event">List your event</li>
      @if(Auth::user()==null)
      <li class="links"><a href="/login"><i class="fas fa-heart" id="wis"></i></a></li>
      @else
      <li class="links"><a href="/wishlist"><i class="fas fa-heart" id="wis"></i></a></li>
      @endif
      <li class="links"><a href="/search"><i class="fas fa-search" id="sear"></i></a></li>
      @if(Auth::user()==null)
      <li class="links"><a href="/login"><i class="fas fa-shopping-cart" id="ca"></i></a></li>
      @else
      <li class="links"><a href="/cart"><i class="fas fa-shopping-cart" id="ca"></i></a></li>
      @endif
      </span>
      @guest
                            <li class="links">
                                <a class="nav-link" href="{{ route('login') }}" id="login">{{ __('Login') }}</a>
                            </li>

                            @else

               <li class="links">
               <div class="dropdown">
  <label><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <label id="pos"><i class="fas fa-user" id="logo"></i><p id="name">{{ Auth::user()->name }}</p></label></label>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt" id="log"></i>    <p id="out">{{ __('Logout') }}<p>
                                    </a>
                                    </div>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        Session::flush(); 
                                
                                    </form>
</div>
               </li>
               @endguest             
    </ul>
    </div>

    </nav>
    </div>

    <script>
function myFunction() {
  var x = document.getElementById("navbar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
