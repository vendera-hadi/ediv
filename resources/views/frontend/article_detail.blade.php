@extends('frontend.layout.main')

@section('title')
{{$post->title}}
@endsection

@section('content')
<div class="container-fluid article-detail-title-bg">
  <div class="jumbotron bg-brown text-center">
    <h1 class="text-custom3 font-weight-bold">{{$post->title}}</h1>
  </div>
</div>

<div class="container-fluid article-bg">
  <div class="container foreground">
    <div class="row">
      <div class="col-sm-12">
        <center><img src="{{asset($post->image)}}" class="img-fluid img-article" alt="{{$post->title}}"></center>
      </div>
      <div class="col-sm-12 my-5">
        <div class="bs-component">
          <article class="text-custom3">
            {!! $post->description !!}
          </article>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
