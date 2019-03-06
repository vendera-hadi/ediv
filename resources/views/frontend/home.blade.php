@extends('frontend.layout.main')

@section('title')
Home
@endsection

@section('content')
  <div id="app">
    <section id="slider" class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-11">
          <my-carousel :images='{!! $sliders !!}'/>
        </div>
      </div>
    </section>

    <section id="product" class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-6">
          <img src="{{asset('images/ediva_pure.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
          <h1>Ediva Pure</h1>
          <p>Suplemen alami untuk menyeimbangkan masalah hormon dalam tubuh dan juga membantu meringankan gejala pre-menstruasi</p>
        </div>
      </div>
      <div class="row d-flex justify-content-center mt-5">
        <div class="col-sm-4">
          <h1>Ediva Young</h1>
          <p>Suplemen alami yang dapat memelihara juga membantu mengurangi berbagai permasalahan yang timbul pada kulit</p>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
          <img src="{{asset('images/ediva_young.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </section>

    <section id="animate-desc" class="container-fluid py-5 my-5">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-11">
          <h1 class="text-brown text-center">kebaikan alami untuk para wanita indonesia</h1>
        </div>
        <div class="col-sm-5 mt-3">
          <p class="text-brown text-center">Bahan alami yang terkandung dalam Ediva memiliki berbagai manfaat yang mampu menjaga dan merawat tubuh dari dalam</p>
        </div>
      </div>
    </section>

    <section id="why-ediva" class="container-fluid py-5 my-5">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-11">
          <h1 class="text-brown text-center">Kenapa Ediva ?</h1>
        </div>
      </div>
      <div class="container">
        <div class="row d-flex justify-content-center why-container">
        <div class="col-sm-6">
          <div class="row why-1 d-flex flex-row-reverse">
            <div class="col-sm-6">
              <h3>Ediva Pure</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mt-5">
          <div class="row why-2 d-flex flex-row-reverse">
            <div class="col-sm-6">
              <h3>Ediva Young</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section id="video" class="container-fluid py-5 my-5">
      <div class="embed-responsive embed-responsive-21by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
      </div>
    </section>
  </div>
@endsection
