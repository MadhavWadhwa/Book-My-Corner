
<head>
<link rel="stylesheet" href="{{asset('css/cart.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/ba724881a4.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
</head>
<?php static $total=0; static $count=-1; $c=count($usercart); $check=0; $x; $y=0?>
@extends('layout')
@section('content')
@if(!count($usercart)>0)
<br>
<br>
<div class="empw">
<i class="fas fa-cart-arrow-down"></i>
    <h2>OOPS!!!!! YOUR CART IS EMPTY CHECK <a href='/event'>HERE</a></h2>
    </div>
    @else
<h4 id="heading">Confirm Your Cart Details and Pay</h4>
<div class="cartcom">
<hr style="width:50%">
<label class="steps">STEP 1 : LOGGED IN AS:</label> <span id="auth">{{Auth::user()->email}}</span>
<hr style="width:50%">
<label class="steps" id="s2">STEP 2 : ORDER SUMMARY</label>
<div class="cart">
  <table class="items">
    <tr>
    <th><p id="qty">ITEM</p></th>
    <th ><p id="qt">QTY</p></th>
    <th><p id="q">SUBTOTAL</p></th>
</tr>
@foreach($usercart as $i) 
  <tr>
    <td class="first">
      <div class="cart-info">
        <h5>Register Ticket</h5>
        <h5 id="ename">{{$i->name}}</h5>
        <h5>{{$i->date}}</h5>
      </div>
    </td>
    <td class="second">1</td>
    <td class="third">Rs. {{$i->price}} <a href="/cart/delete/{{$i->id}}"><i class="fas fa-times"></i></a></td>
</tr>
@endforeach
  </table>
  <?php 
  foreach($usercart as $i)
  $total=$total + $i->price; 
  ?>
  <hr id="dot">
  <label class="tot"> <h3>Total: </h3>  <label>Rs. {{$total}}<label></label>
</div>
<a href="/thank"><button id="pay">CONTINUE</button></a>
</div>
@endif
@endsection