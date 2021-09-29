
@extends('layout')
@section('content')
<div class="container">
<h2 class="display-2">Add New Product</h2>
<a href="{{route('stores.index')}}" style="float:right" class="btn btn-primary">Back</a><br><br>
@if($errors->any())
	<div class="alert alert-danger">
<strong>Whoops!!There Were Some Problems With Input</strong><br><br>
@foreach($errors->all() as $err)

<li>{{$err}}</li>

@endforeach
<ul>

</ul>
</div>
@endif
     <form method="post" action="{{route('posts.update',$post->id)}}">
	@csrf
	@method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input  class="form-control" type="text"name="name" id="name" placeholder="Enter name" value="{{$post->name}}">
            </div>
            
			<div class="form-group">
                <label for="name">Detail</label>
                <textarea class="form-control" name="detail">{{$post->detail}}</textarea>
            </div>
			
			
         <center>   <button class="btn btn-primary" type="submit">Submit</button></center>
        </form>
</div>
@endsection
