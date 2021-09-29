@extends('layout')
@section('content')


@if($errors->any())
<div class="alert alert-danger">

<strong>Whoops!!There Were Some Problems With Input</strong><br><br>
<ul>


</ul>

@foreach($errors->all() as $err)

<li>{{$err}}</li>

@endforeach
</div>


@endif


<div class="container">
<h2 class="display-2">Add New Product</h2>

     <form method="post" action="{{route('stores.store')}}">
	@csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input  class="form-control" type="text"name="name" id="name" placeholder="Enter name">
            </div>
            
			<div class="form-group">
                <label for="name">Detail</label>
                <textarea class="form-control" name="detail"></textarea>
            </div>
			
			
         <center>   <button class="btn btn-primary" type="submit">Submit</button></center>
        </form>
</div>








@endsection