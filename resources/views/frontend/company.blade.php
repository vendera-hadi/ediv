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
          <div class="content text-center">
            <h1 class="text-brown">PT. Meiji Indonesia</h1>
            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
    </div>
  </section>
</div>
@endsection
