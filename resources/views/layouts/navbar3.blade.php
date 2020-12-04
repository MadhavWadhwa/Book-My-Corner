
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/ba724881a4.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/navbar3.css')}}">
    </head>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="bar">
  <a class="navbar-brand" href="/event"><img src="https://insider.in/go-out-at-home-digital-events/images/insiderLogoWhite.png" class="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav" id="list">
      
      <li class="links"><a href="/events-popular" class="link">Popular Events</a></li>
      <li class="links"><a href="/events-free" class="link">Free Events</a></li>
      <li class="links"><a href="#" class="link">Today's Events</a></li>
    </ul>
    <span class="navbar-text">

    <ul class="navbar-nav" id="second">
      
      <li class="links" id="event">List your event</li>
      <li class="links"><a href="/wishlist"><i class="fas fa-heart" id="ca"></i></a></li>
      <li class="links"><a href="/search"><i class="fas fa-search" id="ca"></i></a></li>
      <li class="links"><a href="/cart"><i class="fas fa-shopping-cart" id="ca"></i></a></li>
      </span>
      @guest
                            <li clss="links">
                                <a class="nav-link" href="{{ route('login') }}" id="login">{{ __('Login') }}</a>
                            </li>

                            @else

               <li class="links">
               <div class="dropdown">
               <label id="whole"><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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