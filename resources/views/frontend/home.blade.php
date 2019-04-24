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

    <section id="product-mobile" class="container my-5 home-product-container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <img src="{{asset('images/logo_ediva_pure.png')}}" width="200" class="img-responsive mb-3">
          <!-- <h1 class="text-light-gray text-custom my-3">Ediva Pure</h1> -->
          <img src="{{asset('images/ediva_pure.png')}}" class="img-fluid my-3" alt="">
          <p class="text-gray my-3 text-custom3">Suplemen alami untuk membantu meringankan gejala pra-menstruasi.</p>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-sm-12 text-center">
          <img src="{{asset('images/logo_ediva_young.png')}}" width="200" class="img-responsive mb-3">
          <!-- <h1 class="text-light-gray text-custom my-3">Ediva Young</h1> -->
          <img src="{{asset('images/ediva_young2.png')}}" class="img-fluid my-3" alt="">
          <p class="text-gray my-3 text-custom3">Suplemen alami untuk membantu memelihara kesehatan kulit.</p>
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
          <h1 class="text-red text-custom text-right" style="padding-right: 80px"><span>Gac Fruit</span></h1>
        </div>
        <div class="col-sm-6">
          <h1 class="text-orange text-custom"><span>Royal Jelly</span></h1>
        </div>
      </div>

      <div class="row d-flex justify-content-center" style="margin-top: 300px">
        <div class="col-sm-6">
          <h2 class="text-light-brown text-custom text-right px-5">Evening<br>Primrose<br>Oil</h1>
          <img src="{{asset('images/primrose.png')}}" width="350" class="img-fluid primrose-left" alt="" data-aos="fade-down">
          <img src="{{asset('images/vit-e.png')}}" width="150" class="img-fluid vit-e-left" alt="" data-aos="fade-down">
        </div>
        <div class="col-sm-6">
          <h2 class="text-light-brown text-custom text-left px-5">Evening<br>Primrose<br>Oil</h1>
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
            <h5 class="text-brown text-custom3 font-weight-bold w-100 my-3 brush3" style="font-size: medium; padding: 29px 77px;">Vitamin B Complex</h5>
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
            <h5 class="text-brown text-custom3 font-weight-bold w-100 my-3 brush5" style="padding: 17px 44px;">Omega 6 Fatty Acid</h5>
          </div>
        </div>
      </div>

      <div class="home-primrose-desc-2">
        <div class="row" data-aos="fade-down-right">
          <div class="col-sm-12">
            <img src="{{asset('images/arrow-right.png')}}" width="110" class="img-fluid" alt="">
          </div>
          <div class="col-sm-12">
            <h5 class="text-brown text-custom3 font-weight-bold w-100 my-3 brush5" style="padding: 19px 43px;">Asam Gamma-linolenic</h5>
          </div>
        </div>
      </div>

    </section>

    <section id="animate-desc-mobile" class="container-fluid py-5 my-5">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-custom text-red text-center news-header-title my-3">Evening Primroses Oil</h1>
          <img src="{{asset('images/primroses.png')}}" class="img-fluid my-3" width="580" alt="primroses">
        </div>
        <div class="col-sm-12 text-center">
          <h3 class="text-brown text-custom3 font-weight-bold my-3">Omega 6 Fatty Acid</h5>
          <p class="text-custom3">Bermanfaat untuk memaksimalkan proses metabolisme dan membantu mengoptimalkan proses regenerasi kulit dari dalam tubuh</p>
        </div>
        <div class="col-sm-12 text-center">
          <h3 class="text-brown text-custom3 font-weight-bold my-3">Asam Gamma-linolenic</h5>
          <p class="text-custom3">Berperan penting mengatasi masalah radang/inflamasi, terutama pada penyakit kulit</p>
        </div>
      </div>

      <div class="row my-5">
        <div class="col-sm-12">
          <h1 class="text-custom text-red text-center news-header-title my-3">VIT - E</h1>
          <center><img src="{{asset('images/vit-e.png')}}" class="img-fluid my-3" alt="primroses" width="220"></center>
        </div>
        <div class="col-sm-12 text-center">
          <p class="my-3 text-custom3">Mendorong produksi kolagen yang berfungsi mengurangi jumlah garis halus dan tanda-tanda penuaan.</p>
        </div>
        <div class="col-sm-12 text-center">
          <p class="my-3 text-custom3">Melancarkan sirkulasi darah dan menurunkan indikasi terjadinya sindrom pramenstruasi.</p>
        </div>
      </div>

      <div class="row my-5">
        <div class="col-sm-12">
          <h1 class="text-custom text-red text-center news-header-title my-3">GAC Fruit</h1>
          <img src="{{asset('images/gac-fruit-2.png')}}" class="img-fluid" width="580" alt="primroses">
        </div>
        <div class="col-sm-12 text-center">
          <h3 class="text-brown text-custom3 font-weight-bold my-3">Tinggi Kandungan Betacarotine</h5>
          <p class="text-custom3">Membantu Melancarkan aliran darah dan meminimalisir rasa sakit saat premenstruasi.</p>
        </div>
        <div class="col-sm-12 text-center">
          <h3 class="text-brown text-custom3 font-weight-bold my-3">Tinggi Kandungan Lycopene</h5>
          <p class="text-custom3">Lycopene mengandung antioksidan yang melimpah untuk meningkatkan sistem kekebalan tubuh.</p>
        </div>
      </div>

      <div class="row my-5">
        <div class="col-sm-12">
          <h1 class="text-custom text-red text-center news-header-title my-3">Royal Jelly</h1>
          <img src="{{asset('images/royal-jelly.png')}}" class="img-fluid" width="580" alt="primroses">
        </div>
        <div class="col-sm-12 text-center">
          <h3 class="text-brown text-custom3 font-weight-bold my-3">Asam Amino</h5>
          <p class="text-custom3">Membentuk antibodi tubuh untuk menjaga tubuh dari zat asing yang masuk ke dalam tubuh.</p>
        </div>
        <div class="col-sm-12 text-center">
          <h3 class="text-brown text-custom3 font-weight-bold my-3">Vitamin B Complex</h5>
          <p class="text-custom3">Mengoptimalkan produksi energi dan mengoptimalkan penyerapan nutrisi.</p>
        </div>
        <div class="col-sm-12 text-center">
          <h3 class="text-brown text-custom3 font-weight-bold my-3">Protein</h5>
          <p class="text-custom3">Berperan meningkatkan sistem imun dan membangun sel, serta jaringan dalam tubuh.</p>
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
