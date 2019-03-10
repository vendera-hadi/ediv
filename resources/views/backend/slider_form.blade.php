@extends('layouts.app')

@section('title')
{{$title}}
@endsection

@section('content')
<form action="{{$action}}" method="post" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="type" value="{{$type}}">
  @if(!empty($slider))
  <div class="form-group">
    <label for="image">Old Image</label><br>
    <img src="{{asset($slider->path)}}" class="img-fluid" width="400" alt="">
  </div>
  @endif
  <div class="form-group">
    <label for="image">Image (ukuran : 1000 x 462 px)</label>
    @if(!empty($slider))
    <input type="file" name="image" class="form-control-file" id="image">
    @else
    <input type="file" name="image" class="form-control-file" id="image" required>
    @endif
  </div>
  <div class="form-group">
    <label for="title">Short Title</label>
    <input class="form-control" name="title" type="text" placeholder="Short Title" value="{{!empty($slider) ? $slider->title : ''}}">
  </div>
  <div class="form-group">
    <label for="desc">Short Description</label>
    <textarea name="desc" class="form-control" id="desc" rows="3">{{!empty($slider->desc) ? $slider->desc : ''}}</textarea>
  </div>
  <a href="{{route('admin.home')}}" class="btn btn-secondary">Back</a>
  <button type="submit" class="btn btn-primary pull-right">Submit</button>
</form>
@endsection
