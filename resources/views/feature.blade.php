<head>
<link rel="stylesheet" href="{{asset('css/feature.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div class="feature">
<h1>Featured Events</h1>
<div class="cards">

@foreach($feature as $i)
<div class="card" style="width:250px">
    <a href="event/{{$i->id}}"><img class="card-img-top" src="{{asset('uploads/' . $i->filename)}}" alt="Card image"></a>
    <label class="logo">{{$i->type}}</label>
    <div class="title">
    <b><h3 class="card-title">{{$i->name}}</h3></b>
    </div>
    <div class="card-body">
    <h5 class="price" style="color:darkgray">{{$i->date}}</h5>
    <h5 style="color:darkgray">Watch on Zoom</h5>
    <h5 class="price" style="font-weight:bold">Rs.{{$i->price}} onwards</h5>
    </div>
  </div>
@endforeach
</div>
</div>