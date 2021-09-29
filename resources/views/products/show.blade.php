@extends('layout')
@section('title','show a product')
@section('content')

<div class="container">

 <div class="row">

  <div class="col-sm-12">
  <pre>

<h2>{{$product->title}}</h2>
    {{$product->body}}
  </div>

 </div>



</div>








@endsection

