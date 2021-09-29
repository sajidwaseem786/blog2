@extends('layout')
@section('content')
<br><br>
<br>
<a href="{{route('posts.create')}}">create</a>
@if($message=Session::get("success"))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif

@if($message=Session::get('succcess'))

<div class="alert alert-success">
{{$message}}
</div>

@endif
<table class="table table-bordered container">
<thead>
<tr>
<th>No.</th>
<th>Name</th>
<th>Detail</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($posts as $post)
<tr>
<td>{{++$i}}</td>
<td>{{$post->name}}</td>
<td>{{$post->detail}}</td>
<td>
	<a href="{{route('posts.show',$post->id)}}" >show</a>
	<a href="{{route('posts.edit',$post->id)}}" >edit</a>
	<form method="post" action="{{route('posts.destroy',$post->id)}}">
    @csrf
    @method('delete')
	<input type="submit" value="delete">

     </form>
</td>
</tr>
@endforeach

</tbody>
</table>

{!! $posts->links() !!}





@endsection