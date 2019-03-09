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

      <!-- NEWS -->
      <div class="row d-flex justify-content-between py-3">
        <div class="col-sm-6">
          <div class="row">
            <!-- news first -->
            <div class="col-sm-12">
              <div class="card">
                <img class="card-img-top img-fluid fit-image" src="{{asset('images/news/News 2.png')}}" alt="title">
                <div class="card-body">
                  <h5 class="card-title">News Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-blue text-white font-weight-bold rounded-circle pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 my-3">
              <div class="card">
                <img class="card-img-top img-fluid fit-image-small" src="{{asset('images/news/News 2.png')}}" alt="title">
                <div class="card-body">
                  <h5 class="card-title">News Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-blue text-white font-weight-bold rounded-circle pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 my-3">
              <div class="card">
                <img class="card-img-top img-fluid fit-image-small" src="{{asset('images/news/News 2.png')}}" alt="title">
                <div class="card-body">
                  <h5 class="card-title">News Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-blue text-white font-weight-bold rounded-circle pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 my-3">
              <div class="card">
                <img class="card-img-top img-fluid fit-image-small" src="{{asset('images/news/News 2.png')}}" alt="title">
                <div class="card-body">
                  <h5 class="card-title">News Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-blue text-white font-weight-bold rounded-circle pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 my-3">
              <div class="card">
                <img class="card-img-top img-fluid fit-image-small" src="{{asset('images/news/News 2.png')}}" alt="title">
                <div class="card-body">
                  <h5 class="card-title">News Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-blue text-white font-weight-bold rounded-circle pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-12 my-3">
              <a href="#" class="btn btn-blue font-weight-bold text-white pull-right">Read All News</a>
            </div>

          </div>
        </div>

        <!-- EVENT -->
        <div class="col-sm-6">
          <div class="row">
            <!-- event first -->
            <div class="col-sm-12">
              <div class="card">
                <img class="card-img-top img-fluid fit-image" src="{{asset('images/news/News 2.png')}}" alt="title">
                <div class="card-body">
                  <h5 class="card-title">News Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-pink font-weight-bold text-white rounded-circle pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>
            <!-- end -->

            <div class="col-sm-6 my-3">
              <div class="card">
                <img class="card-img-top img-fluid fit-image-small" src="{{asset('images/news/News 2.png')}}" alt="title">
                <div class="card-body">
                  <h5 class="card-title">News Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-pink text-white font-weight-bold rounded-circle pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 my-3">
              <div class="card">
                <img class="card-img-top img-fluid fit-image-small" src="{{asset('images/news/News 2.png')}}" alt="title">
                <div class="card-body">
                  <h5 class="card-title">News Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-pink text-white font-weight-bold rounded-circle pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 my-3">
              <div class="card">
                <img class="card-img-top img-fluid fit-image-small" src="{{asset('images/news/News 2.png')}}" alt="title">
                <div class="card-body">
                  <h5 class="card-title">News Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-pink text-white font-weight-bold rounded-circle pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 my-3">
              <div class="card">
                <img class="card-img-top img-fluid fit-image-small" src="{{asset('images/news/News 2.png')}}" alt="title">
                <div class="card-body">
                  <h5 class="card-title">News Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-pink text-white font-weight-bold rounded-circle pull-right px-3 py-2">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-12 my-3">
              <a href="#" class="btn btn-pink font-weight-bold text-white pull-right">Read All Events</a>
            </div>

          </div>
        </div>
        <!-- end -->
      </div>

    </div>
  </section>
</div>
@endsection
