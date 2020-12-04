
<head>
<link rel="stylesheet" href="{{asset('css/ticket.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div class="all">

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

<div>
@foreach($tick as $i)
<form method="post" action="{{url('/add-cart')}}">
@csrf
<input type="hidden" value="{{$i->name}}" name="name">
<input type="hidden" value="{{$i->date}}" name="date">
<input type="hidden" value="Online" name="location">
<input type="hidden" value="{{$i->price}}" name="price">
<input type="hidden" value="1" name="no_of_tickets">
<h1>{{$i->name}}</h1>
<h4>{{$i->date}} | {{$i->time}}</h4>
<hr>
<div class="ticket">
<p id="reg">Register Ticket : </p>
<p>Rs. {{$i->price}} x</p>
<select name="no_of_tickets" id="ticket">
    <option value="1">1</option>
</select>
</div>
<div>
<button type="submit">Add to Cart</button>
</div>
</div>
</form>
@endforeach
@endsection
</div>