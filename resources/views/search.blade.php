
<head>
<link rel="stylesheet" href="{{asset('css/search.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

@include('layouts.navbar3')
<form class="form-inline d-flex justify-content-center md-form form-sm active-pink-2 mt-2" method="POST" action="{{url('/search-results')}}" id="form">
@csrf
  <input  type="text" placeholder="Search For Type of Events"
    aria-label="Search" id="body" name="type">
  <i class="fas fa-search" aria-hidden="true"></i>
</form>
<br>
<br>
<h1><i class="fab fa-searchengin" aria-hidden="true"></i></h1>
<div class="all">
<h1>Hi {{Auth::user()->name}} , Confused about which type of event to select!!!!! Search above</h1>
<h2>We have different types of events for you that you will really enjoy!!!</h2>
<br>

<h3>You can search for...
    <ul>
        <li>Comedy</li>
        <li>Motivation</li>
        <li>Singing</li>
        <li>Kids</li>
        <li>Sports</li>
</ul>
</h3>
</div>

@include('layouts.footer')
<script>
document.getElementById("body").onkeyup = function(e) {
    if (e.keyCode === 13) {
        document.getElementById("form").submit();
    }
    return true;
};
</script>
