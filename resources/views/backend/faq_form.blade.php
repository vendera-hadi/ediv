@extends('layouts.app')

@section('title')
{{$title}}
@endsection

@section('content')
<form action="{{$action}}" method="post">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input class="form-control" name="title" type="text" placeholder="Title" value="{{!empty($faq) ? $faq->title : ''}}" required>
  </div>

  <div class="form-group">
    <label for="title">Description</label>
    <textarea class="form-control" name="description" rows="8" cols="80" required>{{!empty($faq) ? $faq->description : ''}}</textarea>
  </div>

  <a href="{{route('admin.faq.index')}}" class="btn btn-secondary">Back</a>
  <button type="submit" class="btn btn-primary pull-right">Submit</button>
</form>
@endsection
