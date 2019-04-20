@extends('frontend.layout.main')

@section('title')
PT. Meiji Indonesia
@endsection

@section('content')
<div id="app">
  <section id="company" class="container-fluid article-bg">
    <!-- slider -->
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-11">
          <my-carousel :images='{!! $sliders !!}'/>
        </div>
        <!-- <div class="company-leaf-left">
          <img src="{{asset('images/leaf-left.png')}}" width="150" alt="">
        </div>
        <div class="company-leaf-right">
          <img src="{{asset('images/leaf-right.png')}}" width="150" alt="">
        </div> -->
      </div>
    </div>
    <!-- slider -->
    <!-- box -->
    <div class="container mt-5">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-11 contact-box-shadow p-5 company-box">
          <div class="content text-center text-custom3">
            <h1 class="text-brown font-weight-bold mb-5">{!! !empty($title->value) ? $title->value : "" !!}</h1>
            {!! !empty($description->value) ? $description->value : "" !!}
          </div>
          <div class="company-flower-right" style="z-index: 1">
            <img src="{{asset('images/company-box-right.png')}}" width="189" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- box -->
  </section>

  <section id="video" class="container-fluid py-5 my-5">
    <div class="embed-responsive embed-responsive-21by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bus0q6JDyBQ" allowfullscreen></iframe>
    </div>
  </section>
</div>
@endsection
