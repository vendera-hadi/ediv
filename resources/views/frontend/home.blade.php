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
          <img src="{{asset('images/logo_ediva_pure.png')}}" width="200" class="img-responsive mb-5">
          <!-- <h1 class="text-gray text-custom">Ediva Pure</h1> -->
          <p class="text-gray text-custom3">Suplemen alami untuk membantu meringankan gejala pra-menstruasi.</p>
        </div>
      </div>
      <div class="row d-flex justify-content-center mt-5">
        <div class="col-sm-4" data-aos="fade-right" data-aos-delay="1000">
          <img src="{{asset('images/logo_ediva_young.png')}}" width="200" class="img-responsive mb-5">
          <!-- <h1 class="text-gray text-custom">Ediva Young</h1> -->
          <p class="text-gray text-custom3">Suplemen alami untuk membantu memelihara kesehatan kulit.</p>
        </div>
        <div class="col-sm-6" data-aos="fade-left">
          <img src="{{asset('images/ediva_young2.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </section>

    <section id="product-mobile" class="container-fluid p-0">
      <div class="row">
        <div class="col-sm-12 text-center" style="height: 150px">
          <img src="{{asset('images/ediva_pure.png')}}" alt="" class="img-fluid" style="position: absolute;top: 63px;left: 9px;width: 204px; z-index: 2">
          <img src="{{asset('images/pink-brush.png')}}" alt="" class="img-fluid" style="position: absolute; top: 42px; left: -9px; width: 260px;">
          <img src="{{asset('images/logo_ediva_pure.png')}}" width="100" class="img-responsive mb-5" style="position: absolute; top: 36px; right: 73px;">
          <div class="text-custom3" style="position: absolute; top: 86px; right: 36px; width: 159px; font-size: 11px;">
            Suplemen alami untuk membantu meringankan gejala pra-menstruasi.
          </div>
        </div>

        <div class="col-sm-12 text-center" style="height: 200px">
          <img src="{{asset('images/ediva_young.png')}}" alt="" class="img-fluid" style="position: absolute; top: 63px; right: 34px; width: 158px; z-index: 2;">
          <img src="{{asset('images/blue-brush.png')}}" alt="" class="img-fluid" style="position: absolute; top: 35px; right: 19px; width: 207px;">
          <img src="{{asset('images/logo_ediva_young.png')}}" width="100" class="img-responsive mb-5" style="position: absolute; top: 36px; left: 36px;">
          <div class="text-custom3" style="position: absolute; top: 91px; left: 8px; width: 171px; font-size: 11px;">
            Suplemen alami untuk membantu memelihara kesehatan kulit.
          </div>
        </div>
      </div>

      <div class="row py-3" style="background-color: #fff9eb">
        <div class="col-sm-11">
          <h1 class="text-brown text-center text-custom3 font-weight-bold" style="font-size: 14px;">Kebaikan alami untuk para wanita indonesia</h1>
        </div>
        <div class="col-sm-5 mt-1" style="font-size: 11px;width: 300px;margin: 0 auto;">
          <p class="text-brown text-center text-custom3">Bahan alami yang terkandung dalam Ediva memiliki berbagai manfaat yang mampu menjaga dan merawat tubuh dari dalam</p>
        </div>

        <div class="col-sm-12">
          <img src="{{asset('images/home-mobile-1.jpg')}}" class="img-fluid img-responsive">
        </div>
      </div>

      <div class="row py-3">
        <div class="col-sm-12">
          <img src="{{asset('images/pink-brush.png')}}" alt="" class="img-fluid" style="position: absolute; top: -25px; left: -37px; width: 260px;">
          <img src="{{asset('images/blue-brush.png')}}" alt="" class="img-fluid" style="position: absolute; top: 180px; right: -28px; width: 260px;">
        </div>
        <div class="col-sm-12">
          <h1 class="text-custom text-red text-brown text-center text-gray" style="font-size: 35px">Kenapa Ediva ?</h1>
        </div>
        <div class="col-sm-12">
          <div class="w-50 pull-left p-3 text-center text-custom3" style="height: 240px; background-color: #ffebea; font-size: 11px; z-index: 2">
            <img src="{{asset('images/logo_ediva_pure.png')}}" width="100" class="img-responsive img-fluid"><br><br>
            Kandungan alami dalam setiap kapsul EDIVA Pure memberikan manfaat untuk membantu meringankan gejala pra-mentruasi, sehingga membebaskan kamu dari rasa khawatir saat datang bulan.
          </div>
          <div class="w-50 pull-left p-3 text-center text-custom3" style="height: 240px; background-color: #ecf9ff; font-size: 11px; z-index: 2">
            <img src="{{asset('images/logo_ediva_young.png')}}" width="100" class="img-responsive img-fluid"><br><br>
            Kandungan alami dalam setiap kapsul EDIVA Young memberikan manfaat untuk membantu memelihara kesehatan kulit, sehingga kulit menjadi lebih elastis dan sehat.
          </div>
        </div>
      </div>
    </section>

    <section id="animate-desc" class="container-fluid py-5 my-5">
      <div class="row d-flex justify-content-center" data-aos="fade-up">
        <div class="col-sm-11">
          <h1 class="text-brown text-center text-custom3 font-weight-bold">Kebaikan alami untuk para wanita indonesia</h1>
        </div>
        <div class="col-sm-5 mt-3">
          <p class="text-brown text-center text-custom3">Bahan alami yang terkandung dalam Ediva memiliki berbagai manfaat yang mampu menjaga dan merawat tubuh dari dalam</p>
        </div>
      </div>

      <div class="row d-flex justify-content-center title-group-1">
        <div class="col-sm-6">
          <h1 class="text-red text-custom text-right" style="padding-right: 80px"><span>Buah Gac</span></h1>
        </div>
        <div class="col-sm-6">
          <h1 class="text-orange text-custom"><span>Royal Jelly</span></h1>
        </div>
      </div>

      <div class="row d-flex justify-content-center" style="margin-top: 300px">
        <div class="col-sm-6">
          <h2 class="text-light-brown text-custom text-right px-5">Minyak<br>Evening<br>Primrose</h1>
          <img src="{{asset('images/primrose.png')}}" width="350" class="img-fluid primrose-left" alt="" data-aos="fade-down">
          <img src="{{asset('images/vit-e.png')}}" width="150" class="img-fluid vit-e-left" alt="" data-aos="fade-down">
        </div>
        <div class="col-sm-6">
          <h2 class="text-light-brown text-custom text-left px-5">Minyak<br>Evening<br>Primrose</h1>
          <center><img src="{{asset('images/primrose2.png')}}" width="350" class="img-fluid primrose-right" alt="" data-aos="fade-down"></center>
          <br>
          <center><img src="{{asset('images/vit-e.png')}}" width="150" class="img-fluid vit-e-right" alt="" data-aos="fade-down"></center>
        </div>
      </div>

      <div class="home-jelly-right"></div>
      <div class="home-jelly-right2"></div>
      <div class="home-jelly-right3" data-aos="fade-down"></div>
      <div class="home-jelly-right4" data-aos="fade-down"></div>

      <div class="home-jelly-desc-1">
        <div class="row" data-aos="fade-down-left">
          <div class="col-sm-6 offset-sm-3">
            <img src="{{asset('images/arrow-left.png')}}" width="110" class="img-fluid" alt="">
          </div>
          <div class="col-sm-12">
            <h5 class="text-brown text-custom3 font-weight-bold w-100 my-3 brush2" style="padding: 30px 60px;">Asam Amino</h5>
          </div>
        </div>
      </div>

      <div class="home-jelly-desc-2">
        <div class="row" data-aos="fade-down-right">
          <div class="col-sm-6 offset-sm-1">
            <img src="{{asset('images/arrow-right.png')}}" width="110" class="img-fluid" alt="">
          </div>
          <div class="col-sm-12">
            <h5 class="text-brown text-custom3 font-weight-bold w-100 my-3 brush3" style="font-size: medium; padding: 29px 77px;">Vitamin B Kompleks</h5>
          </div>
        </div>
      </div>

      <div class="home-jelly-desc-3">
        <div class="row" data-aos="fade-down-right">
          <div class="col-sm-6">
            <h5 class="text-brown text-custom3 font-weight-bold w-100 my-3 brush3" style="padding: 12px 87px;">Enzim</h5>
          </div>
          <div class="col-sm-12">
            <img src="{{asset('images/arrow-up-2.png')}}" width="110" class="img-fluid" alt="">
          </div>
        </div>
      </div>

      <div class="home-fruit-left"></div>
      <div class="home-fruit-bulir1 bulir" data-aos="fade-down-right"></div>
      <div class="home-fruit-bulir2 bulir" data-aos="fade-down-right" data-aos-delay="500"></div>
      <div class="home-fruit-bulir3 bulir" data-aos="fade-down-right" data-aos-delay="1000"></div>
      <div class="home-fruit-bulir4 bulir" data-aos="fade-down-right" data-aos-delay="1000"></div>
      <div class="home-fruit-bulir5 bulir" data-aos="fade-down-right" data-aos-delay="1500"></div>

      <div class="home-fruit-desc-1">
        <div class="row" data-aos="fade-down-left" data-aos-delay="1000">
          <div class="col-sm-6 offset-sm-3">
            <img src="{{asset('images/arrow-left.png')}}" width="110" class="img-fluid" alt="">
          </div>
          <div class="col-sm-12">
            <h5 class="text-brown text-custom3 font-weight-bold w-100 my-3 brush3" style="padding: 24px 61px;">Mengandung Likopen</h5>
          </div>
        </div>
      </div>

      <div class="home-fruit-desc-2">
        <div class="row" data-aos="fade-down-right" data-aos-delay="1000">
          <div class="col-sm-12">
            <img src="{{asset('images/arrow-right.png')}}" width="110" class="img-fluid" alt="">
          </div>
          <div class="col-sm-12">
            <h5 class="text-brown text-custom3 font-weight-bold w-100 my-3 brush3" style="padding: 50px 71px;">Mengandung ekstrak karotenoid</h5>
          </div>
        </div>
      </div>

      <div class="home-primrose-desc-1">
        <div class="row" data-aos="fade-down-left">
          <div class="offset-sm-4 col-sm-4">
            <img src="{{asset('images/arrow-left.png')}}" width="110" class="img-fluid" alt="">
          </div>
          <div class="col-sm-12">
            <h5 class="text-brown text-custom3 font-weight-bold w-100 my-3 brush5" style="padding: 17px 44px;">Asam Lemak Omega 6</h5>
          </div>
        </div>
      </div>

      <div class="home-primrose-desc-2">
        <div class="row" data-aos="fade-down-right">
          <div class="col-sm-12">
            <img src="{{asset('images/arrow-right.png')}}" width="110" class="img-fluid" alt="">
          </div>
          <div class="col-sm-12">
            <h5 class="text-brown text-custom3 font-weight-bold w-100 my-3 brush5" style="padding: 19px 43px;">Asam gamma-linolenat</h5>
          </div>
        </div>
      </div>

    </section>

    <section id="why-ediva" class="container-fluid py-5 my-5">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-11">
          <h1 class="text-custom text-red text-brown text-center text-gray" style="font-size: 85px">Kenapa Ediva ?</h1>
        </div>
      </div>
      <div class="container">
        <div class="row d-flex justify-content-center why-container">
        <div class="col-sm-6">
          <div class="row d-flex justify-content-center">
            <div class="col-sm-10 p-5 why-bg1">
              <center><img src="{{asset('images/logo_ediva_pure.png')}}" width="250" class="img-responsive"></center>
              <p class="text-custom3 mt-5">
                Kandungan alami dalam setiap kapsul EDIVA Pure memberikan manfaat untuk membantu meringankan gejala pra-mentruasi, sehingga membebaskan kamu dari rasa khawatir saat datang bulan.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mt-5">
          <div class="row d-flex justify-content-center">
            <div class="col-sm-10 p-5 why-bg2">
              <center><img src="{{asset('images/logo_ediva_young.png')}}" width="250" class="img-responsive"></center>
              <p class="text-custom3 mt-5">
                Kandungan alami dalam setiap kapsul EDIVA Young memberikan manfaat untuk membantu memelihara kesehatan kulit, sehingga kulit menjadi lebih elastis dan sehat.
              </p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section id="video" class="container-fluid py-5 my-5">
      <div class="embed-responsive embed-responsive-21by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bus0q6JDyBQ" allowfullscreen></iframe>
      </div>
    </section>
  </div>
@endsection
