@extends('frontend.layout.main')

@section('title')
News and Event
@endsection

@section('content')
<div id="app">
  <section id="news" class="container-fluid news-bg">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-9">
          <img src="{{asset('images/news-event-banner.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-6">
          <h1 class="text-custom text-brown news-header-title">News</h1>
        </div>
        <div class="col-sm-6">
          <h1 class="text-custom text-right text-brown news-header-title">Event</h1>
        </div>
      </div>

      <div class="row d-flex justify-content-center">
        <div class="card col-sm-6">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="col-sm-6"></div>
      </div>
    </div>
  </section>
</div>
@endsection
