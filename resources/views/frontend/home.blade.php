@extends('frontend.layout.main')

@section('title')
Home
@endsection

@section('content')
  <div id="app">
    <section id="slider" class="container-fluid home-slider-bg">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-sm-11">
            <my-carousel :images='{!! $sliders !!}'/>
          </div>
        </div>
      </div>
    </section>

    <section id="product" class="container home-product-container">
      <div class="row d-flex justify-content-between">
        <div class="col-sm-6" data-aos="fade-right">
          <img src="{{asset('images/ediva_pure.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-sm-4" data-aos="fade-left" data-aos-delay="1000">
          <h1 class="text-gray text-custom">Ediva Pure</h1>
          <p class="text-gray">Suplemen alami untuk menyeimbangkan masalah hormon dalam tubuh dan juga membantu meringankan gejala pre-menstruasi</p>
        </div>
      </div>
      <div class="row d-flex justify-content-center mt-5">
        <div class="col-sm-4" data-aos="fade-right" data-aos-delay="1000">
          <h1 class="text-gray text-custom">Ediva Young</h1>
          <p class="text-gray">Suplemen alami yang dapat memelihara juga membantu mengurangi berbagai permasalahan yang timbul pada kulit</p>
        </div>
        <div class="col-sm-6" data-aos="fade-left">
          <img src="{{asset('images/ediva_young.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </section>

    <section id="animate-desc" class="container-fluid py-5 my-5">
      <div class="row d-flex justify-content-center" data-aos="fade-up">
        <div class="col-sm-11">
          <h1 class="text-brown text-center">kebaikan alami untuk para wanita indonesia</h1>
        </div>
        <div class="col-sm-5 mt-3">
          <p class="text-brown text-center">Bahan alami yang terkandung dalam Ediva memiliki berbagai manfaat yang mampu menjaga dan merawat tubuh dari dalam</p>
        </div>
      </div>

      <div class="row d-flex justify-content-center mt-5">
        <div class="col-sm-6">
          <h1 class="text-red text-custom text-right px-5">Gac Fruit</h1>
        </div>
        <div class="col-sm-6">
          <h1 class="text-orange text-custom px-5">Royal Jelly</h1>
        </div>
      </div>

      <div class="row d-flex justify-content-center" style="margin-top: 300px">
        <div class="col-sm-8">
          <h1 class="text-gray text-custom text-center px-5">Evening Primrose Oil</h1>
          <center><img src="{{asset('images/primrose.png')}}" width="350" class="img-fluid" alt="" data-aos="fade-down"></center>
          <br>
          <center><img src="{{asset('images/vit-e.png')}}" width="150" class="img-fluid" alt="" data-aos="fade-down"></center>
        </div>
      </div>

      <div class="home-jelly-right" data-aos="fade-down"></div>
      <div class="home-jelly-desc-1">
        <div class="row" data-aos="fade-down-left">
          <div class="col-sm-12">
            <img src="{{asset('images/arrow-left.png')}}" width="110" class="img-fluid" alt="">
          </div>
          <div class="col-sm-12">
            <h5 class="text-brown font-weight-bold w-100 my-3">Asam Amino</h5>
          </div>
        </div>
      </div>

      <div class="home-jelly-desc-2">
        <div class="row" data-aos="fade-down-right">
          <div class="col-sm-12">
            <img src="{{asset('images/arrow-right.png')}}" width="110" class="img-fluid" alt="">
          </div>
          <div class="col-sm-12">
            <h5 class="text-brown font-weight-bold w-100 my-3">Vitamin B Complex</h5>
          </div>
        </div>
      </div>

      <div class="home-jelly-desc-3">
        <div class="row" data-aos="fade-down-right">
          <div class="col-sm-12">
            <img src="{{asset('images/arrow-right.png')}}" width="110" class="img-fluid" alt="">
          </div>
          <div class="col-sm-12">
            <h5 class="text-brown font-weight-bold w-100 my-3">Enzim</h5>
          </div>
        </div>
      </div>

      <div class="home-fruit-left" data-aos="fade-down"></div>
      <div class="home-fruit-desc-1">
        <div class="row" data-aos="fade-down-left">
          <div class="col-sm-12">
            <img src="{{asset('images/arrow-left.png')}}" width="110" class="img-fluid" alt="">
          </div>
          <div class="col-sm-12">
            <h5 class="text-brown font-weight-bold w-100 my-3">Mengandung Likopen</h5>
          </div>
        </div>
      </div>

      <div class="home-fruit-desc-2">
        <div class="row" data-aos="fade-down-right">
          <div class="col-sm-12">
            <img src="{{asset('images/arrow-right.png')}}" width="110" class="img-fluid" alt="">
          </div>
          <div class="col-sm-12">
            <h5 class="text-brown font-weight-bold w-100 my-3">Mengandung ekstrak karotenoid</h5>
          </div>
        </div>
      </div>

      <div class="home-primrose-desc-1">
        <div class="row" data-aos="fade-down-left">
          <div class="col-sm-12">
            <img src="{{asset('images/arrow-left.png')}}" width="110" class="img-fluid" alt="">
          </div>
          <div class="col-sm-12">
            <h5 class="text-brown font-weight-bold w-100 my-3">Omega 6 Fatty Acid</h5>
          </div>
        </div>
      </div>

      <div class="home-primrose-desc-2">
        <div class="row" data-aos="fade-down-right">
          <div class="col-sm-12">
            <img src="{{asset('images/arrow-right.png')}}" width="110" class="img-fluid" alt="">
          </div>
          <div class="col-sm-12">
            <h5 class="text-brown font-weight-bold w-100 my-3">Asam Gamma-linolenic</h5>
          </div>
        </div>
      </div>

    </section>

    <section id="why-ediva" class="container-fluid py-5 my-5">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-11">
          <h1 class="text-brown text-center text-gray font-weight-bold">Kenapa Ediva ?</h1>
        </div>
      </div>
      <div class="container">
        <div class="row d-flex justify-content-center why-container">
        <div class="col-sm-6">
          <div class="row why-1 d-flex flex-row-reverse">
            <div class="col-sm-6">
              <h1 class="text-custom text-red font-weight-bold">Ediva Pure</h3>
              <p>Kombinasi Vit E, Evening Primrose Oil, dan buah Gac dapat menjadi anti-inflamasi yang mengurangi nyeri pre menstruasi dan meningkatkan level antioksidan yang menurun saat haid. Sehingga membebaskan kamu dari rasa khawatir saat datang bulan.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mt-5">
          <div class="row why-2 d-flex flex-row-reverse">
            <div class="col-sm-6">
              <h1 class="text-custom text-primary font-weight-bold">Ediva Young</h3>
              <p>Kandungan alami dalam setiap kapsul Ediva Young memberikan manfaat untuk memberikan kolagen pada lapisan dalam kulit (dermis), sehingga proses regenerasi sel kulit akan tetap terjaga. Membuat kulit menjadi jauh lebih elastis, sehat dan tampak cerah.</p>
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
