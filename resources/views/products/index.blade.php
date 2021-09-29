@extends('layout')
@section('title','All Posts')

@section('content')

<div class="container">

 <div class="row">
<a href="">create</a>
@if($message=Session::get("success"))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif


  <div class="col-sm-12">
   
  @foreach($products as $product)
    
    	
     <h2><a href="{{url('/products/show/'.$product->id)}}">{{$product->title}}</a></h2>
       {{$product->body}}<br>

    <a href="{{url('products/edit/'.$product->id)}}" class="btn btn-primary">Edit</a>

 <a href="{{url('products/'.$product->id.'/delete/')}}" class="btn btn-primary">Delete</a>
   @endforeach


  </div>

 </div>



</div>


@endsection