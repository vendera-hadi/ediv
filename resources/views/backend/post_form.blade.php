@extends('layouts.app')

@section('title')
{{$title}}
@endsection

@section('content')
<form action="{{$action}}" method="post" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="type" value="{{$type}}">
  @if(!empty($post))
  <div class="form-group">
    <label for="image">Old Image</label><br>
    <img src="{{asset($post->image)}}" class="img-fluid" width="400" alt="">
  </div>
  @endif

  <div class="form-group">
    <label for="image">Image</label>
    @if(!empty($post))
    <input type="file" name="image" class="form-control-file" id="image">
    @else
    <input type="file" name="image" class="form-control-file" id="image" required>
    @endif
  </div>

  <div class="form-group">
    <label for="title">Title</label>
    <input class="form-control" name="title" type="text" placeholder="Title" value="{{!empty($post) ? $post->title : ''}}" required>
  </div>
  <div class="form-group">
    <label for="desc">Description</label>
    <textarea name="desc" class="form-control" id="article-ckeditor" rows="3" required>{{!empty($post->description) ? $post->description : ''}}</textarea>
  </div>
  <a href="{{route('admin.'.$type)}}" class="btn btn-secondary">Back</a>
  <button type="submit" class="btn btn-primary pull-right">Submit</button>
</form>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
@endsection
