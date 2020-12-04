
<head>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@900&family=Playfair+Display:wght@600&display=swap');
.navbar{
  poistion: relative;
  right: 15px;
  width: 1555px;
}
</style>
</head>
<body>
@extends('layout')
@section('content')
<div class="contain">
<div class="w3-content w3-display-container">
  <img class="mySlides" src="https://res.cloudinary.com/dwzmsvp7f/image/fetch/q_75,f_auto,w_1316/https%3A%2F%2Fmedia.insider.in%2Fimage%2Fupload%2Fc_crop%2Cg_custom%2Fv1566375425%2Ffjivn8yw5nmhbbyekqb6.jpg">
  <img class="mySlides" src="https://res.cloudinary.com/dwzmsvp7f/image/fetch/q_75,f_auto,w_560/https%3A%2F%2Fmedia.insider.in%2Fimage%2Fupload%2Fc_crop%2Cg_custom%2Fv1588232310%2Flj26xierayd3lqybrvye.png">
  <img class="mySlides" src="https://res.cloudinary.com/dwzmsvp7f/image/fetch/q_75,f_auto,w_560/https%3A%2F%2Fmedia.insider.in%2Fimage%2Fupload%2Fc_crop%2Cg_custom%2Fv1593169289%2Fnsitw7p4psdixpbjtbuf.png">

  <button class="w3-button w3-black w3-display-left" id ="left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" id="right" onclick="plusDivs(1)">&#10095;</button>
</div>
<br>
<label>Discover Your Favourite Events</label>
<br>
<br>
<br>
<div class="menu">
@include('feature')

<div class="comedy">
<h1>COMEDY</h1>
<div class="cards">

@foreach($data as $i)
<div class="card" style="width:380px">
    <a href="event/{{$i->id}}"><img class="card-img-top" src="{{asset('uploads/' . $i->filename)}}" alt="Card image"></a>
    <label class="logo">{{$i->type}}</label>
    <div class="card-body">
    <b><h3 class="card-title">{{$i->name}}</h3></b>
    <h5 class="price" style="color:darkgray">{{$i->date}}</h5>
    <h5 style="color:darkgray">Watch on Zoom</h5>
    <h5 class="price" style="font-weight:bold">Rs.{{$i->price}} onwards</h5>
    </div>
  </div>
@endforeach
<a href="/event/type/{{$i->type}}"><button  class="bt" data-hover="View All">&#10095;</button></a>
</div>
</div>
<br>
<br>
<div class="comedy">
<h1>MOTIVATION</h1>
<div class="cards">
@foreach($motivation as $i)
<div class="card" style="width:380px">
<a href="event/{{$i->id}}"><img class="card-img-top" src="{{asset('uploads/' . $i->filename)}}" alt="Card image"></a>
<label class="logo">{{$i->type}}</label>
    <div class="card-body">
    <h3 class="card-title">{{$i->name}}</h3>
    <h5 class="price" style="color:darkgray">{{$i->date}}</h5>
    <h5 style="color:darkgray">Watch on Zoom</h5>
    <h5 class="price" style="font-weight:bold">Rs.{{$i->price}} onwards</h5>
    </div>
  </div>
@endforeach
<a href="/event/type/{{$i->type}}"><button  class="bt" data-hover="View All">&#10095;</button></a>
</div>  
</div>
<br>
<br>
<div class="comedy">
<h1>SINGING</h1>
<div class="cards">
@foreach($singing as $i)
<div class="card" style="width:380px">
<a href="event/{{$i->id}}"><img class="card-img-top" src="{{asset('uploads/' . $i->filename)}}" alt="Card image"></a>
<label class="logo">{{$i->type}}</label>
    <div class="card-body">
    <h3 class="card-title">{{$i->name}}</h3>
    <h5 class="price" style="color:darkgray">{{$i->date}}</h5>
    <h5 style="color:darkgray">Watch on Zoom</h5>
    <h5 class="price" style="font-weight:bold">Rs.{{$i->price}} onwards</h5>
    </div>
  </div>
@endforeach
<a href="/event/type/{{$i->type}}"><button  class="bt" data-hover="View All">&#10095;</button></a>
</div>
</div>
<br>
<br>
<div class="comedy">
<h1>KIDS</h1>
<div class="cards">
@foreach($kids as $i)
<div class="card" style="width:380px">
<a href="event/{{$i->id}}"><img class="card-img-top" src="{{asset('uploads/' . $i->filename)}}" alt="Card image"></a>
<label class="logo">{{$i->type}}</label>
    <div class="card-body">
    <h3 class="card-title">{{$i->name}}</h3>
    <h5 class="price" style="color:darkgray">{{$i->date}}</h5>
    <h5 class="price" style="font-weight:bold">Rs.{{$i->price}} onwards</h5>
    </div>
  </div>
@endforeach
<a href="/event/type/{{$i->type}}"><button  class="bt" data-hover="View All">&#10095;</button></a>
</div>
</div>
<br>
<br>
<div class="comedy">
<h1>SPORTS</h1>
<div class="cards">
@foreach($sports as $i)
<div class="card" style="width:380px">
<a href="event/{{$i->id}}"><img class="card-img-top" src="{{asset('uploads/' . $i->filename)}}" alt="Card image"></a>
<label class="logo">{{$i->type}}</label>
    <div class="card-body">
    <h3 class="card-title">{{$i->name}}</h3>
    <h5 class="price" style="color:darkgray">{{$i->date}}</h5>
    <h5 class="price" style="font-weight:bold">Rs.{{$i->price}} onwards</h5>
    </div>
  </div>

@endforeach
<a href="/event/type/{{$i->type}}"><button  class="bt" data-hover="View All">&#10095;</button></a>
</div>
</div>
</div>
</div> 
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

@endsection
</body>