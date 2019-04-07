@extends('frontend.layout.main')

@section('title')
Articles
@endsection

@section('content')
<div id="app">
  <section id="article" class="container-fluid article-bg">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-9">
          <img src="{{asset('images/article-banner.jpg')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="article-list" class="container-fluid">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-9 article-list-box">
          <div class="row">
            <!-- news -->
            @foreach($posts as $key => $post)
            <div class="col-sm-6 article-box-{{$key%2==0 ? 'even' : 'odd'}}">
              <div class="card">
                <a href="{{route('article_detail', ['slug' => $post->slug])}}" title="{{$post->title}}">
                  <img class="card-img-top img-fluid fit-image-small" src="{{asset($post->image)}}" alt="{{$post->title}}">
                </a>
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <p class="card-text">{{Str::limit(strip_tags($post->description), 100)}}</p>
                  <a href="{{route('article_detail', ['slug' => $post->slug])}}" class="btn btn-brown text-white font-weight-bold btn-rounded pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>
            @endforeach
            <!-- end news -->
          </div>
        </div>
      </div>

      <div class="overlay">
        <img src="{{asset('images/article-list-box-bg.png')}}" class="img-fluid" alt="">
      </div>
    </div>
  </section>
</div>
@endsection
