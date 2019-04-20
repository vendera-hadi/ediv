@extends('frontend.layout.main')

@section('title')
Frequently Asked Questions
@endsection

@section('content')
<section id="faqs" class="container-fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-sm-9">
      <img src="{{asset('images/faq-banner2.jpg')}}" class="img-fluid" alt="">
    </div>
  </div>
  <div class="row d-flex justify-content-center faq-decor-bg">
    <div class="col-sm-12">
      <h1 class="text-red text-center text-custom3 font-weight-bold mt-5">FAQ</h1>
      <!-- accordion -->
      <div class="row d-flex justify-content-center my-5">
        <div class="col-sm-9">
          <div id="accordion">
            @foreach($faqs as $key => $faq)
            <div class="card my-2">
              <div class="card-header" id="heading{{$key}}">
                <h5 class="mb-0 font-weight-bold text-custom3">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapse{{$key}}">
                    {{$faq->title}}
                  </button>
                </h5>
              </div>

              <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{$key}}" data-parent="#accordion">
                <div class="card-body text-custom3">
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
