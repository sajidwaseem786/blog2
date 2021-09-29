@extends('layout')
@section('title','Laravel5.4')
@section('content')

<div class="container">

<div class="row">

<div class="col-sm-6 push-sm-3" >

<form action="{{url('/products')}}" class="form-horizontal" method="post">
@csrf
<div class="form-group">
<legend style="text-align: center;"class="display-4 mt-5">Create New Post</legend>
</div>

@if($message=Session::get('success'))
<p class='alert alert-success'>{{$message}}</p>


@endif

<div class="form-group">
	<span class="label">Title</span>
<input type="text" class="form-control" name="title">
</div>

<div class="form-group">
	<span class="label">Body</span>
<textarea class="form-control" name="body" rows="3"></textarea>
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