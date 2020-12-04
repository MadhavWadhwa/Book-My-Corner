
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
    <div>
        <strong>{{ session()->get('success') }}</strong>
   </div>
@endif
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>    {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        Session::flush(); 
                                
                                    </form>
<form method="post" action="{{url('/saveEvent')}}" enctype="multipart/form-data">
@csrf
 <div class="formset">

<label>Enter Event Name:</label>
<input type="text" name="name"/>

<br>
<br>
<label>Enter Event Type:</label>
<input type="text" name="type"/>


<br>
<br>
<label>Enter Event Date:</label>
<input type="date" name="date"/>

<br>
<br>
<label>Enter Event Time:</label>
<input type="text" name="time"/>
<br>
<br>
<label>Enter Event Price:</label>
<input type="number" name="price"/>
<br>
<br>

<label>Enter Event Description:</label>
<textarea rows="3" name="description"></textarea>

<br>
<br>
<label>Upload Event Image:</label>
<input type="file" name="image"/>

<br>
<br>

<input type="submit" name="add" value= "Add Event"/>

 </div>
</form>