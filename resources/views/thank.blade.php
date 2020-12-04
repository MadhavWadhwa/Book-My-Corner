<style>
*{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}
.search{
        position:absolute;
        right: 100px;
        top: 20px;
}
#ca{
  position: relative;
  right: 80px;
  bottom: 6px;
}

a{
  text-decoration: none;
  color: black;
}
.search input{
  position: relative;
  right: 40px;
}
button{
    background-color: white;
    color: white;

}
#list{
  position: relative;
  left: 600px;
  bottom: 2px;
}

  .fas{
  font-size: 19px;
  background-color: white;
  margin: 2px 30px; 
  padding: 2px;
  cursor: pointer;
  border-radius: 5px;
  position:relative;
  bottom: 300px;
  right: 100px;
}
#search{
  position:relative;
  right: 90px;
  bottom: 6px;

}
input{
  position:relative;
  bottom: 8px;
  width: 300px;
}

#cartlink{
  color: red;
  font-size: 15px;
  position: relative;
  bottom: 2px;
  left: 5px;
  text-decoration: none;
  padding: 5px;
}
.user{
  position: relative;
  left: 200px;
  color: white;
}

.far{
  color:white;
}
#on{
  font-size:25px;
  position:relative;
  bottom: 5px;
}
#login{
      position: relative;
      left: 100px;
     
}
#n{
  display: inline;
  color: white;
}
#log{
  position: relative;
  top: 3px;
  left: 20px;
}
#wishlink{
  cursor: pointer;
  color: red;
  font-size: 15px;
  position: relative;
  bottom: 3px;
  left: 2px;
  padding: 3px;
}




</style>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
</head>
<div class="jumbotron text-center">
  <h1 class="display-3">Your Payment Is Successful!</h1>
  <p class="lead"><strong>The tickets would be sent to you on your email <b>{{Auth::user()->email}}</b> </strong>
  <hr>
  <p>
    Having trouble? <a href="">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="/event" role="button">Continue to homepage</a>
  </p>
</div>
