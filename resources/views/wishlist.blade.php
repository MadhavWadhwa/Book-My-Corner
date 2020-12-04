
<head>
<link  rel="stylesheet" href="/css/all.min.css">
<script src="https://kit.fontawesome.com/ba724881a4.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Red+Rose:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/wishlist.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Merriweather:ital,wght@1,900&family=Red+Rose:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
@include('layouts.navbar')
<body>
@if(!count($allEvents)>0)
<br>
<br>
<div class="empw">
<i class="fas fa-heart-broken"></i>
    <h2>OOPS!!!!! NO EVENT IN YOUR WISHLIST CLICK THE HEART ICON ON THE EVENT TO ADD!!!!! CHECK <a href='/event'>HERE</a></h2>
    </div>
    @else
@foreach($allEvents as $i)
<div class="cont">
<div class="logos">
    <a href="/event/{{$i->id}}"><img src="{{asset('uploads/' . $i->filename)}}"></a>
    </div>
    <div class="prop">
    <a href="/wishlist/{{$i->id}}"><i class="fas fa-times"></i></a>
    <h3 class="title">{{$i->name}}</h3>
<h5 class= datetime>{{$i->date}} | {{$i->time}}</h5>
@if($i->price == 0)
<h5 class="price">Free</h5>
@else
<h5 class="price">Rs. {{$i->price}}</h5>
@endif
  </div>
  </div>
@endforeach
<div class="secondhalf">
@if(count($allEvents)%2 != 0)
<div class="heading"><h1 id="pm" onclick="show()"> + </h1> <label id="pastfav">Past Favourites</label></div>
<style>
  .heading{
              position: relative;
              right: 600px;
              top: 300px;
  } 
  </style>
  @else
  <div class="heading sec"><h1 id="pm" onclick="show()"> + </h1> <label id="pastfav">Past Favourites</label></div>
  @endif
<div id="past" style="display : none">
@foreach($allPasts as $i)
<div class="pwish">
<div class="logos">
    <a href="/event/{{$i->id}}"><img src="{{asset('uploads/' . $i->filename)}}"></a>
    </div>
    <div class="prop">
    <a href="/pastwishlist/{{$i->id}}"><i class="fas fa-times"></i></a>
    <h3 class="title">{{$i->name}}</h3>
<h5 class= datetime>{{$i->date}} | {{$i->time}}</h5>
@if($i->price == 0)
<h5 class="price">Free</h5>
@else
<h5 class="price">Rs. {{$i->price}}</h5>
@endif
  </div>
  </div>
@endforeach
</div>
@endif
@include('layouts.footer')

<script>
function show() {
  var x = document.getElementById("past");
  var y = document.getElementById("pm");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.innerHTML = "-";
  } 
  else {
    x.style.display = "none";
    y.innerHTML = "+";
  }
}
  </script>




