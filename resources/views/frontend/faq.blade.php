@extends('frontend.layout.main')

@section('title')
Frequently Asked Questions
@endsection

@section('content')
<section id="faq" class="container-fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-sm-9">
      <img src="{{asset('images/faq-banner.jpg')}}" class="img-fluid" alt="">
    </div>
  </div>
  <div class="row d-flex justify-content-center faq-decor-bg">
    <div class="col-sm-12">
      <!-- accordion -->
      <div class="row d-flex justify-content-center my-5">
        <div class="col-sm-9">
          <div id="accordion">
            @foreach($faqs as $faq)
            <div class="card my-2">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    {{$faq->title}}
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  {{$faq->description}}
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- accordion -->
      <div class="faq-decor-left">
        <img src="{{asset('images/faq-decor-1.png')}}" width="210" alt="">
      </div>
      <div class="faq-decor-right">
        <img src="{{asset('images/faq-decor-2.png')}}" width="150" alt="">
      </div>
      <div class="faq-decor-right2">
        <img src="{{asset('images/faq-decor-3.png')}}" width="170" alt="">
      </div>
    </div>
  </div>
</section>
@endsection
