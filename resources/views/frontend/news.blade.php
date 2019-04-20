@extends('frontend.layout.main')

@section('title')
News and Event
@endsection

@section('content')
<div id="app">
  <section id="news" class="container-fluid px-0 article-bg" style="background-position: inherit; background-size: contain;">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-9">
          <img src="{{asset('images/news-event-banner.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

    <div class="container-fluid news-bg">
      <div class="container mt-5">
        <div class="row d-flex justify-content-center">
          <div class="col-sm-6">
            <h1 class="text-custom2 text-brown news-header-title">News</h1>
          </div>
          <div class="col-sm-6">
            <h1 class="text-custom2 text-right text-brown news-header-title">Event</h1>
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
                    <a href="{{route('article_detail', ['slug' => $post->slug])}}" class="btn btn-blue text-white font-weight-bold btn-rounded pull-right px-3 py-2 text-custom3 font-weight-bold">Read More</a>
                  </div>
                </div>
              </div>
              @endforeach

              <div class="col-sm-12 my-3">
                <a href="{{route('article_list', ['type' => 'news'])}}" class="btn btn-blue btn-rounded font-weight-bold text-white pull-right text-custom3 font-weight-bold">Read All News</a>
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
                    <a href="{{route('article_detail', ['slug' => $post->slug])}}" class="btn btn-pink text-white font-weight-bold btn-rounded pull-right px-3 py-2 text-custom3 font-weight-bold">Read More</a>
                  </div>
                </div>
              </div>
              @endforeach
              <!-- end -->

              <div class="col-sm-12 my-3">
                <a href="{{route('article_list', ['type' => 'event'])}}" class="btn btn-pink btn-rounded font-weight-bold text-white pull-right text-custom3 font-weight-bold">Read All Events</a>
              </div>

            </div>
          </div>
          <!-- end -->
        </div>

      </div>
    </div>
  </section>
</div>
@endsection
