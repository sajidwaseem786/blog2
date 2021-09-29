@extends('layout')
@section('title','edit post')
@section('content')
<div class="container">

<div class="row">

<div class="col-sm-6 push-sm-3" >
<form method="post" action="{{url('products/update')}}">
@csrf
<input type='hidden' value='{{$product->id}}' name="id">
<div class="form-group">
<legend style="text-align: center;"class="display-4 mt-5">Edit Post</legend>
</div>




<div class="form-group">
	<span class="label">Edit Title</span>
<input type="text" class="form-control" name="title" value="{{$product->title}}">
</div>

<div class="form-group">
	<span class="label">Edit Body</span>
<textarea class="form-control" name="body" rows="3">{{$product->body}}</textarea>
</div>

<div class="form-group">
<div class="col-sm-10 push-sm-2">
	
	<input type="submit" class="btn btn-primary" value="submit">

</div>
</div>

</form>

</div>

</div>

</div>
@endsection