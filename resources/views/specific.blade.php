
<head>
<link rel="stylesheet" href="{{asset('css/specific.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
@include('layouts.navbar')

<h1 style="color:blue">{{strtoupper($type[0]->type)}}</h1>
<br>
@foreach($type as $i)
<div class="card" style="width:400px">
    <a href="/event/{{$i->id}}"><img class="card-img-top" src="{{asset('uploads/' . $i->filename)}}" alt="Card image"></a>
    <label class="logo">{{$i->type}}</label>
    @if($i->type=='Comedy')
    <style>
    footer{
      position: absolute;
      top: 2600px;
    }
    </style>
    @else
<style>
footer{
      position: absolute;
      top: 1950px;
    }
    </style>
    @endif
    <div class="card-body">
    <h3 class="card-title">{{$i->name}}</h3>
    <h5 class="price" style="color:darkgray">{{$i->date}}</h5>
    <h5 style="color:darkgray">Watch on Zoom</h5>
    @if($i->price==0)
    <h5 class="price" style="font-weight:bold">Free</h5>
     @else
     <h5 class="price" style="font-weight:bold">Rs.{{$i->price}} onwards</h5>
     @endif
    </div>
  </div>

@endforeach

@include('layouts.footer')