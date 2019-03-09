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
            <div class="col-sm-6 article-box-odd">
              <div class="card">
                <img class="card-img-top img-fluid fit-image-small" src="{{asset('images/news/News 2.png')}}" alt="title">
                <div class="card-body">
                  <h5 class="card-title">News Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-brown text-white font-weight-bold rounded-circle pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 article-box-even">
              <div class="card">
                <img class="card-img-top img-fluid fit-image-small" src="{{asset('images/news/News 2.png')}}" alt="title">
                <div class="card-body">
                  <h5 class="card-title">News Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-brown text-white font-weight-bold rounded-circle pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 article-box-odd">
              <div class="card">
                <img class="card-img-top img-fluid fit-image-small" src="{{asset('images/news/News 2.png')}}" alt="title">
                <div class="card-body">
                  <h5 class="card-title">News Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-brown text-white font-weight-bold rounded-circle pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 article-box-even">
              <div class="card">
                <img class="card-img-top img-fluid fit-image-small" src="{{asset('images/news/News 2.png')}}" alt="title">
                <div class="card-body">
                  <h5 class="card-title">News Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-brown text-white font-weight-bold rounded-circle pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 article-box-odd">
              <div class="card">
                <img class="card-img-top img-fluid fit-image-small" src="{{asset('images/news/News 2.png')}}" alt="title">
                <div class="card-body">
                  <h5 class="card-title">News Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-brown text-white font-weight-bold rounded-circle pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>
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