@extends('frontend.layout.main')

@section('title')
News and Event
@endsection

@section('content')
<div id="app">
  <section id="news" class="container-fluid px-0 article-bg">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-9 news-banner">
          <img src="{{asset('images/news-event-banner.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

    <div class="container-fluid news-bg news-desktop">
      <div class="container mt-5">
        <div class="row d-flex justify-content-center news-subtitle">
          <div class="col-sm-6">
            <h1 class="text-custom2 text-brown news-header-title my-5">Berita</h1>
          </div>
          <div class="col-sm-6">
            <h1 class="text-custom2 text-right text-brown news-header-title my-5">Acara</h1>
          </div>
        </div>

        <!-- NEWS -->
        <div class="row d-flex justify-content-between py-3">

          <div class="col-sm-6">
            <div class="row">
              <!-- news first -->
              @foreach($news as $key => $post)
              <div class="{{ $key == 0 ? 'col-sm-12' : 'col-sm-6 my-3'}}">
                <div class="card">
                  <a href="{{route('article_detail', ['slug' => $post->slug])}}" title="{{$post->title}}">
                    <img class="card-img-top img-fluid {{ $key == 0 ? 'fit-image' : 'fit-image-small'}}" src="{{asset($post->image)}}" alt="{{ $post->title }}">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title text-custom3 font-weight-bold">{{ $post->title }}</h5>
                    <p class="card-text text-custom3">{{Str::limit(strip_tags($post->description), 100)}}</p>
                    <a href="{{route('article_detail', ['slug' => $post->slug])}}" class="btn btn-blue text-white font-weight-bold btn-rounded pull-right px-3 py-2 text-custom3 font-weight-bold">Baca Lainnya</a>
                  </div>
                </div>
              </div>
              @endforeach

              <div class="col-sm-12 my-3">
                <a href="{{route('article_list', ['type' => 'news'])}}" class="btn btn-blue btn-rounded font-weight-bold text-white pull-right text-custom3 font-weight-bold">Baca Semua Berita</a>
              </div>

            </div>
          </div>

          <!-- EVENT -->
          <div class="col-sm-6">

            <div class="row">
              <!-- event first -->
              @foreach($events as $key => $post)
              <div class="{{ $key == 0 ? 'col-sm-12' : 'col-sm-6 my-3'}}">
                <div class="card">
                  <a href="{{route('article_detail', ['slug' => $post->slug])}}" title="{{$post->title}}">
                    <img class="card-img-top img-fluid {{ $key == 0 ? 'fit-image' : 'fit-image-small'}}" src="{{asset($post->image)}}" alt="{{ $post->title }}">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title text-custom3 font-weight-bold">{{ $post->title }}</h5>
                    <p class="card-text text-custom3">{{Str::limit(strip_tags($post->description), 100)}}</p>
                    <a href="{{route('article_detail', ['slug' => $post->slug])}}" class="btn btn-pink text-white font-weight-bold btn-rounded pull-right px-3 py-2 text-custom3 font-weight-bold">Baca Lainnya</a>
                  </div>
                </div>
              </div>
              @endforeach
              <!-- end -->

              <div class="col-sm-12 my-3">
                <a href="{{route('article_list', ['type' => 'event'])}}" class="btn btn-pink btn-rounded font-weight-bold text-white pull-right text-custom3 font-weight-bold">Baca Semua Acara</a>
              </div>

            </div>
          </div>
          <!-- end -->
        </div>

      </div>
    </div>

    <div class="container-fluid news-bg news-mobile">
      <div class="row">
        <div class="col-sm-12 p-3 news-mobile-news">
          <h1 class="text-custom text-light-brown news-header-title text-center">Berita</h1>
        </div>
        @foreach($news as $key => $post)
        <div class="col-sm-12 py-2 news-mobile-news">
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
        <div class="col-sm-12 py-3 news-mobile-news">
          <center>
            <a href="{{route('article_list', ['type' => 'news'])}}" class="btn btn-blue btn-rounded font-weight-bold text-white text-custom3 font-weight-bold">Baca Lainnya</a>
          </center>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 p-3 news-mobile-event">
          <h1 class="text-custom text-light-brown news-header-title text-center">Acara</h1>
        </div>
        @foreach($events as $key => $post)
        <div class="col-sm-12 py-2 news-mobile-event">
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

        <div class="col-sm-12 py-3 news-mobile-event">
          <center>
            <a href="{{route('article_list', ['type' => 'event'])}}" class="btn btn-pink btn-rounded font-weight-bold text-white text-custom3 font-weight-bold">Baca Lainnya</a>
          </center>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
