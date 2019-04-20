@extends('layouts.app')

@section('title')
Web Content
@endsection

@section('content')
<form action="{{route('admin.content.update')}}" method="post">
  @csrf

  @foreach($contents as $key => $content)
  <div class="form-group">
    <label for="title">{{ ucfirst(str_replace("."," ", $content->key)) }}</label>
    <input type="hidden" name="key[]" value="{{$content->key}}">
    @if(!in_array($content->key, $textarea_filter))
    <input type="text" class="form-control" name="value[]" value="{!! !empty($content->value) ? $content->value : '' !!}">
    @else
    <textarea name="value[]" class="form-control" id="content-{{$key}}" rows="3" required>{!! !empty($content->value) ? $content->value : '' !!}</textarea>
    @endif
  </div>
  @endforeach

  <a href="{{route('admin.content.index')}}" class="btn btn-secondary">Back</a>
  <button type="submit" class="btn btn-primary pull-right">Submit</button>
</form>

<script src="{{asset('laravel-ckeditor/ckeditor.js')}}"></script>
<script>
    @foreach($contents as $key => $content)
      @if(in_array($content->key, $textarea_filter))
      CKEDITOR.replace('content-{{$key}}');
      @endif
    @endforeach
</script>
@endsection
