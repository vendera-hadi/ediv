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
        <div class="col-sm-9 article-list-box py-5">
          <div class="row">
            <!-- news -->
            @foreach($posts as $key => $post)
            <div class="col-sm-6 my-3">
              <div class="card">
                <a href="{{route('article_detail', ['slug' => $post->slug])}}" title="{{$post->title}}">
                  <img class="card-img-top img-fluid fit-image-small" src="{{asset($post->image)}}" alt="{{$post->title}}">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-custom3 font-weight-bold">{{$post->title}}</h5>
                  <p class="card-text text-custom3">{{Str::limit(strip_tags($post->description), 100)}}</p>
                  <a href="{{route('article_detail', ['slug' => $post->slug])}}" class="btn btn-brown text-custom3 text-white font-weight-bold btn-rounded pull-right px-3 py-2">Baca Lainnya</a>
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

  <section id="article-list-mobile" class="container-fluid">
    <div class="row">
      @foreach($posts as $key => $post)
      <div class="col-sm-12 news-mobile-news {{$key == 0 ? 'py-5' : 'py-2'}}">
        <a href="{{route('article_detail', ['slug' => $post->slug])}}" title="{{$post->title}}">
          @if($key == 0)
          <img class="img-fluid fit-image-small" src="{{asset($post->image)}}" alt="{{ $post->title }}">
          <div class="news-mobile-overlay-bg"></div>
          <div class="news-mobile-overlay d-flex">
            <h5 class="text-custom3 my-auto text-center w-100 font-weight-bold">{{$post->title}}</h5>
          </div>
          @else
          <div class="w-50 pull-left">
            <img class="img-fluid fit-image-small-mobile" src="{{asset($post->image)}}" alt="{{ $post->title }}">
          </div>
          <div class="w-50 pull-left h-100">
            <div class="row h-100">
               <div class="col-sm-12 my-auto pl-5 pr-3">
                 <h5 class="text-custom3 font-weight-bold">{{$post->title}}</h5>
               </div>
            </div>
          </div>
          @endif
        </a>
      </div>
      @endforeach
      <div class="col-sm-12 pt-3 pb-5 news-mobile-news">
        <center>
          <a href="{{route('article_list', ['type' => 'article'])}}" class="btn btn-brown btn-rounded font-weight-bold text-white text-custom3 font-weight-bold">Baca Lainnya</a>
        </center>
      </div>
    </div>
  </section>
</div>
@endsection
