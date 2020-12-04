<head>
<link  rel="stylesheet" href="/css/all.min.css">
<script src="https://kit.fontawesome.com/ba724881a4.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/event.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
@extends('layout')

@section('content')
@foreach($errors->all() as $message)
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! $message !!}</strong>
            </div>
        </div>
    </div>
@endforeach
    
    @if(session()->has('success'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ session()->get('success') }} <a href="/wishlist">View wishlist</a></strong>
            </div>
        </div>
    </div>
@endif
<div class="content">
@foreach($num as $i)
<form method="post" action="{{url('/add-to/wishlist')}}">
@csrf
<input type="hidden" value="{{$i->id}}" name="event_id">
  <img src="{{asset('uploads/' . $i->filename)}}" alt="">
  <button  id="wish" type="submit"><i class="far fa-heart" id="icon"></i></button>
  </form>
    <div class="box">
     <h2>{{$i->name}}</h2>
     <i class="fas fa-calendar-week"></i>{{$i->date}} | {{$i->time}}<br>
     <i class="fas fa-map-marker-alt"></i>Online<br>
     @if($i->price==0)
     <i class="fas fa-rupee-sign"></i>-<br>
     @else
     <i class="fas fa-rupee-sign"></i>{{$i->price}}<br>
     @endif
     <a href="/event/{{$i->name}}/buy/ticket"><button>Buy Now</button></a>
    </div>


</div>
<div class="desc">
<h2>About The Event</h2>
<h5 style="margin: 13px" id="desp"> {{$i->description}} </h5>
@endforeach
<br>
<h3 style="margin: 10px" style="font-family: 'Playfair Display', serif">Terms And Conditions</h3>
<ul style="margin: 10px">
<li>Age Limit : 16+</li>
<li>The show will be streamed live on Zoom.</li>
<li>Please make sure to keep your video and audio on throughout the show.</li>
<li>Tickets once booked will not be refunded.</li>
<li>Audio or video recording of the show is not permitted. If you are found recording via mobile or other devices, you will be removed from the show.</li>
<li>Each registered email ID is eligible to buy one ticket.</li>
<li>Tickets are non-transferrable.</li>
<li>Please keep your videos on. We would love to see your faces !</li>
<li>You may face interference during the show depending on the speed and quality of the internet.</li>
</ul>

</div>
@endsection