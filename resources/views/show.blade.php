
<div class="container mt-3">
<a href="{{route('posts.index')}}" class="btn btn-primary" style="float:right">Back</a>
<h3 class="display-3">Product Detail</h3>
  <strong>Name:</strong><br>{{$post->name}}<br>
 <strong>Detail:</strong>{{$post->detail}}
</div>
