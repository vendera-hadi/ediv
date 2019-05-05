@extends('frontend.layout.main')

@section('title')
Product
@endsection

@section('content')
<div id="app">
  <section id="product-top" class="container-fluid">
    <div class="row d-flex justify-content-between">
      <!-- left -->
      <div class="col-sm-6">
        <div class="obj-top-1">
          <img src="{{asset('images/product-obj-1.png')}}" width="165" class="img-fluid" alt="">
        </div>
        <div class="obj-top-2">
          <img src="{{asset('images/ediva_pure.png')}}" title="Meiji Ediva Pure" width="650" class="img-fluid" alt="">
        </div>
      </div>
      <!-- right -->
      <div class="col-sm-6 p-5">
        <img src="{{asset('images/logo_ediva_pure.png')}}" width="200" class="img-responsive obj-top-bounce"><br>
        <!-- <h1 class="text-custom text-gray news-header-title obj-top-bounce">Ediva Pure</h1> -->
        <div class="row d-flex justify-content-start mt-5 obj-top-desc-bg">
          <div class="col-sm-4 obj-top-appear">
            <center><img src="{{asset('images/pure-obj-1.png')}}" width="115" title="meringankan pre-menstruasi" class="img-fluid" alt="ediva pure"></center>
            <p class="text-center my-3 text-custom3">Meringankan Gejala Pre-Menstruasi</p>
          </div>
          <div class="col-sm-4 mx-5 obj-top-appear">
            <center><img src="{{asset('images/pure-obj-2.png')}}" width="115" title="meningkatkan kekebalan tubuh" class="img-fluid" alt="ediva pure"></center>
            <p class="text-center my-3 text-custom3">Meningkatkan Sistem Kekebalan Tubuh</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="product-middle" class="container-fluid">
    <div class="row d-flex justify-content-between">
      <!-- left -->
      <div class="col-sm-6">
        <!-- <h1 class="text-custom text-gray text-right news-header-title" data-aos="fade-left">Ediva Young</h1> -->
        <div class="row d-flex justify-content-end mt-5 obj-middle-desc-bg">
          <div class="col-sm-12 mb-5" data-aos="zoom-out">
            <div class="row d-flex justify-content-end">
              <div class="col-sm-9">
                <img src="{{asset('images/logo_ediva_young.png')}}" width="200" class="img-responsive">
              </div>
            </div>
          </div>
          <div class="col-sm-4" data-aos="zoom-out">
            <center><img src="{{asset('images/young-obj-1.png')}}" width="130" title="meningkatkan produksi kolagen" class="img-fluid" alt="ediva young"></center>
            <p class="text-center my-3 text-custom3">Meningkatkan Produksi Kolagen Pada Kulit</p>
          </div>
          <div class="col-sm-4 mx-5" data-aos="zoom-out">
            <center><img src="{{asset('images/young-obj-2.png')}}" width="88" title="membuat kulit menjadi lebih sehat dan elastis" class="img-fluid" alt="ediva young"></center>
            <p class="text-center my-3 text-custom3">Membuat Kulit Menjadi Lebih Sehat dan Elastis</p>
          </div>
        </div>
      </div>
      <!-- right -->
      <div class="col-sm-6">
        <div class="obj-middle-1 mt-5" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-delay="500">
          <img src="{{asset('images/ediva_young2.png')}}" title="Meiji Ediva Young" width="500" class="img-fluid my-3" alt="">
        </div>
        <div class="obj-middle-2">
          <img src="{{asset('images/product-obj-2.png')}}" width="165" class="img-fluid my-3" alt="">
        </div>
      </div>

    </div>
  </section>


  <section id="product-bottom" class="container-fluid py-5">
    <!-- bottom 1 -->
    <div class="row d-flex justify-content-center my-5">
      <div class="col-sm-9">
        <div class="obj-bottom-title-bg"></div>
        <h1 class="text-pink text-custom2 news-header-title mb-5">Minyak Evening Primrose</h1>
        <div class="row">
          <div class="col-sm-3" data-aos="fade-down-left" data-aos-delay="1000">
            <div class="row" width="130">
              <div class="col-sm-12">
                <img src="{{asset('images/arrow-left.png')}}" class="img-fluid pull-right" alt="">
              </div>
              <div class="col-sm-12">
                <h3 class="text-light-brown text-custom3 font-weight-bold w-100 my-3">Asam Lemak<br>Omega 6</h5>
                <p class="text-custom3" style="position: absolute;width: 246px;left: -42px;text-align: justify;">Bermanfaat untuk memaksimalkan proses metabolisme dan membantu mengoptimalkan proses regenerasi kulit dari dalam tubuh</p>
              </div>
            </div>
          </div>
          <!-- image -->
          <div class="col-sm-6" data-aos="fade-up">
            <img src="{{asset('images/primroses.png')}}" class="img-fluid" width="580" alt="primroses">
          </div>
          <!-- right -->
          <div class="col-sm-3" data-aos="fade-down-right" data-aos-delay="2000">
            <div class="row">
              <div class="col-sm-8">
                <img src="{{asset('images/arrow-right.png')}}" class="img-fluid" alt="">
              </div>
              <div class="col-sm-12">
                <h3 class="text-light-brown text-custom3 font-weight-bold my-3">Asam Gamma-linolenat</h5>
                <p class="text-custom3" style="position: absolute;left: -20px;">Berperan penting mengatasi masalah radang/inflamasi, terutama pada penyakit kulit</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- bottom 2 -->
    <div class="row d-flex justify-content-center my-5">
      <div class="col-sm-9">
        <div class="obj-bottom-title-bg-2"></div>
        <h1 class="text-pink text-custom2 obj-bottom-title-2 mb-5 text-right">VIT - E</h1>
        <div class="row">
          <div class="col-sm-3" data-aos="fade-down-left" data-aos-delay="2000">
            <div class="row">
              <div class="col-sm-12">
                <img src="{{asset('images/arrow-left.png')}}" width="130" class="img-fluid pull-right" alt="">
              </div>
              <div class="col-sm-12">
                <p class="my-3 text-custom3" style="position: absolute;width: 250px;">Mendorong produksi kolagen yang berfungsi mengurangi jumlah garis halus dan tanda-tanda penuaan.</p>
              </div>
            </div>
          </div>
          <!-- image -->
          <div class="col-sm-6" data-aos="fade-up">
            <img src="{{asset('images/vit-e.png')}}" class="img-fluid" width="580" alt="primroses">
          </div>
          <!-- right -->
          <div class="col-sm-3" data-aos="fade-down-right" data-aos-delay="1000">
            <div class="row">
              <div class="col-sm-12">
                <img src="{{asset('images/arrow-right.png')}}" class="img-fluid" alt="">
              </div>
              <div class="col-sm-12">
                <p class="my-3 text-custom3" style="position: absolute;width: 250px;left: 86px;">Melancarkan sirkulasi darah dan menurunkan indikasi terjadinya sindrom pramenstruasi.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- bottom 3 -->
    <div class="row d-flex justify-content-center my-5">
      <div class="col-sm-9">
        <div class="obj-bottom-title-bg"></div>
        <h1 class="text-pink news-header-title text-custom2 mb-5">Buah GAC</h1>
        <div class="row">
          <div class="col-sm-3" data-aos="fade-down-left" data-aos-delay="1000">
            <div class="row">
              <div class="col-sm-12">
                <img src="{{asset('images/arrow-left.png')}}" width="130" class="img-fluid pull-right" alt="">
              </div>
              <div class="col-sm-12">
                <h3 class="text-light-brown text-custom3 font-weight-bold w-100 my-3" style="position: absolute;text-align: center;">Tinggi Kandungan<br>Beta Karoten</h5>
                <p class="text-custom3" style="position: absolute;top: 95px;width: 250px;text-align: justify;left: 9px;">Membantu Melancarkan aliran darah dan meminimalisir rasa sakit saat premenstruasi.</p>
              </div>
            </div>
          </div>
          <!-- image -->
          <div class="col-sm-6" data-aos="fade-up">
            <img src="{{asset('images/gac-fruit-2.png')}}" class="img-fluid" width="580" alt="primroses">
          </div>
          <!-- right -->
          <div class="col-sm-3" data-aos="fade-down-right" data-aos-delay="2000">
            <div class="row">
              <div class="col-sm-12">
                <img src="{{asset('images/arrow-right.png')}}" data-aos="fade-down-right" class="img-fluid" alt="">
              </div>
              <div class="col-sm-12">
                <h3 class="text-light-brown font-weight-bold w-100 my-3 text-custom3" style="position: absolute;text-align: center;left: 78px;">Tinggi Kandungan Likopen</h5>
                <p class="text-custom3" style="position: absolute;top: 95px;width: 279px;left: 69px;text-align: justify;">Likopen mengandung antioksidan yang melimpah untuk meningkatkan sistem kekebalan tubuh.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- bottom 4 -->
    <div class="row d-flex justify-content-center my-5">
      <div class="col-sm-9">
        <div class="obj-bottom-title-bg-4"></div>
        <h1 class="text-pink text-custom2 obj-bottom-title-2 mb-5 text-right">Royal Jelly</h1>
        <div class="row">
          <!-- top -->
          <div class="col-sm-12" data-aos="fade-up-left" data-aos-delay="3000">
            <div class="row d-flex justify-content-center">
              <div class="col-sm-4">
                <h3 class="text-light-brown text-custom3 font-weight-bold w-100 my-3 text-center">Asam Amino</h5>
                <p class="text-left text-custom3">Membentuk antibodi tubuh untuk menjaga tubuh dari zat asing yang masuk ke dalam tubuh.</p>
              </div>
              <div class="col-sm-3">
                <img src="{{asset('images/arrow-up.png')}}" class="img-fluid mt-5" alt="">
              </div>
            </div>
          </div>
          <!-- left -->
          <div class="col-sm-3" data-aos="fade-down-left" data-aos-delay="1000">
            <div class="row">
              <div class="col-sm-12">
                <img src="{{asset('images/arrow-left.png')}}" width="130" class="img-fluid pull-right" alt="">
              </div>
              <div class="col-sm-12">
                <h3 class="text-light-brown text-center text-custom3 font-weight-bold w-100 my-3">Vitamin B<br>Kompleks</h5>
                <p class="text-custom3" style="position: absolute;width: 255px;left: -2px;">Mengoptimalkan produksi energi dan mengoptimalkan penyerapan nutrisi.</p>
              </div>
            </div>
          </div>
          <!-- image -->
          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="4000">
            <img src="{{asset('images/royal-jelly.png')}}" class="img-fluid" width="580" alt="primroses">
          </div>
          <!-- right -->
          <div class="col-sm-3" data-aos="fade-down-right">
            <div class="row">
              <div class="col-sm-12">
                <img src="{{asset('images/arrow-right.png')}}" class="img-fluid" alt="">
              </div>
              <div class="col-sm-12">
                <h3 class="text-light-brown text-custom3 font-weight-bold w-100 my-3 text-right">Protein</h5>
                <p class="text-custom3" style="position: absolute;width: 249px;text-align: justify;left: 63px;">Berperan meningkatkan sistem imun dan membangun sel, serta jaringan dalam tubuh.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section id="product-bottom-mobile" class="container-fluid p-0">
    
    <div class="row">
      <div class="col-sm-12 text-center" style="height: 150px">
        <img src="{{asset('images/ediva_pure.png')}}" alt="" class="img-fluid" style="position: absolute; top: 46px; left: 9px; width: 181px; z-index: 2;">
        <img src="{{asset('images/pink-brush.png')}}" alt="" class="img-fluid" style="position: absolute; top: 42px; right: -2px; width: 260px;opacity: 0.7;">
        <img src="{{asset('images/logo_ediva_pure.png')}}" width="100" class="img-responsive mb-5" style="position: absolute; top: 24px; right: 84px;">
        <div style="position: absolute; top: 77px; right: 134px;">
          <center><img src="{{asset('images/pure-obj-1.png')}}" width="50" title="meringankan pre-menstruasi" class="img-fluid" alt="ediva pure"></center>
          <p class="text-center my-3 text-custom3" style="font-size: 11px;width: 100px;">Meringankan Gejala Pre-Menstruasi</p>
        </div>
        <div style="position: absolute; top: 72px; right: 34px;">
          <center><img src="{{asset('images/pure-obj-2.png')}}" width="50" title="meningkatkan kekebalan tubuh" class="img-fluid" alt="ediva pure"></center>
          <p class="text-center my-3 text-custom3" style="font-size: 11px;width: 100px;">Meningkatkan Sistem Kekebalan Tubuh</p>
        </div>
      </div>

      <div class="col-sm-12 text-center my-5" style="height: 200px">
        <img src="{{asset('images/ediva_young.png')}}" alt="" class="img-fluid" style="position: absolute; top: 63px; right: 19px; width: 157px; z-index: 2;">
        <img src="{{asset('images/pink-brush.png')}}" alt="" class="img-fluid" style="position: absolute; top: 58px; left: 19px; width: 241px;">
        <img src="{{asset('images/logo_ediva_young.png')}}" width="100" class="img-responsive mb-5" style="position: absolute; top: 24px; left: 83px;">
        <div style="position: absolute; top: 77px; left: 34px;">
          <center><img src="{{asset('images/young-obj-1.png')}}" width="60" title="meningkatkan produksi kolagen" class="img-fluid" alt="ediva young"></center>
          <p class="text-center my-3 text-custom3" style="font-size: 11px;width: 100px;">Meningkatkan Produksi Kolagen Pada Kulit</p>
        </div>
        <div style="position: absolute; top: 72px; left: 134px;">
          <center><img src="{{asset('images/young-obj-2.png')}}" width="44" title="membuat kulit menjadi lebih sehat dan elastis" class="img-fluid" alt="ediva young"></center>
          <p class="text-center my-3 text-custom3" style="font-size: 11px;width: 100px;">Membuat Kulit Menjadi Lebih Sehat dan Elastis</p>
        </div>
      </div>

    </div>

    <div class="row" style="background-color: #fdfcfa">
      <div class="col-sm-12 text-center">
        <h1 class="text-pink text-custom2 news-header-title my-5" style="font-size: 40px">Minyak Evening Primrose</h1>
      </div>
      <div class="col-sm-12" style="height: 216px">
        <center>
          <img src="{{asset('images/primroses.png')}}" class="img-fluid" width="230" alt="primroses">
        </center>
        <img src="{{asset('images/pink-brush.png')}}" alt="" class="img-fluid" style="position: absolute; top:0; left: 16%; width: 283px;opacity: 0.5;">
        <img src="{{asset('images/arrow-right.png')}}" class="img-fluid" alt="" style="position: absolute;width: 61px;top: 10px;right: 58px;">
        <img src="{{asset('images/arrow-left.png')}}" class="img-fluid" alt="" style="position: absolute; width: 50px; top: 10px; left: 49px;">
        <div style="position: absolute; left: 29px;top: 67px;">
          <h3 class="text-light-brown text-custom3 font-weight-bold my-3" style="font-size: 14px; width: 100px;">Asam Lemak Omega 6</h5>
          <p class="text-custom3" style="font-size: 10px;width: 150px;">Bermanfaat untuk memaksimalkan proses metabolisme dan membantu mengoptimalkan proses regenerasi kulit dari dalam tubuh</p>
        </div>
        <div style="position: absolute; right: 18px; top: 67px;">
          <h3 class="text-light-brown text-custom3 font-weight-bold my-3" style="font-size: 14px; width: 100px;">Asam Gamma-linolenat</h5>
          <p class="text-custom3" style="font-size: 10px; width: 120px;position: absolute;left: -10px;">Berperan penting mengatasi masalah radang/inflamasi, terutama pada penyakit kulit</p>
        </div>
      </div>
      <div class="col-sm-12 text-center">
        <h1 class="text-pink text-custom2 news-header-title my-5" style="font-size: 40px">VIT - E</h1>
      </div>
      <div class="col-sm-12" style="height: 216px">
        <center>
          <img src="{{asset('images/vit-e.png')}}" class="img-fluid" width="180" alt="primroses">
        </center>
        <img src="{{asset('images/pink-brush.png')}}" alt="" class="img-fluid" style="position: absolute; top:0; left: 16%; width: 283px;opacity: 0.5;">
        <img src="{{asset('images/arrow-right.png')}}" class="img-fluid" alt="" style="position: absolute;width: 61px;top: 10px;right: 58px;">
        <img src="{{asset('images/arrow-left.png')}}" class="img-fluid" alt="" style="position: absolute; width: 50px; top: 10px; left: 49px;">
        <div style="position: absolute; left: 27px; top: 66px;font-size: 10px;width: 115px;">
          <p class="text-custom3">Mendorong produksi kolagen yang berfungsi mengurangi jumlah garis halus dan tanda-tanda penuaan.</p>
        </div>
        <div style="position: absolute; right: 27px; top: 43px; font-size: 10px; width: 109px;">
          <p class="my-3 text-custom3">Melancarkan sirkulasi darah dan menurunkan indikasi terjadinya sindrom pramenstruasi.</p>
        </div>
      </div>

      <div class="col-sm-12 text-center">
        <h1 class="text-pink text-custom2 news-header-title my-5" style="font-size: 40px">Buah GAC</h1>
      </div>
      <div class="col-sm-12" style="height: 216px">
        <center>
          <img src="{{asset('images/gac-fruit-2.png')}}" class="img-fluid" width="180" alt="primroses">
        </center>
        <img src="{{asset('images/pink-brush.png')}}" alt="" class="img-fluid" style="position: absolute; top:0; left: 16%; width: 283px;opacity: 0.5;">
        <img src="{{asset('images/arrow-right.png')}}" class="img-fluid" alt="" style="position: absolute;width: 61px;top: 10px;right: 58px;">
        <img src="{{asset('images/arrow-left.png')}}" class="img-fluid" alt="" style="position: absolute; width: 50px; top: 10px; left: 49px;">
        <div style="position: absolute; left: 29px;top: 67px;">
          <h3 class="text-light-brown text-custom3 font-weight-bold my-3" style="font-size: 14px; width: 100px;">Tinggi Kandungan<br>Beta Karoten</h5>
          <p class="text-custom3" style="font-size: 10px;width: 150px;">Membantu Melancarkan aliran darah dan meminimalisir rasa sakit saat premenstruasi.</p>
        </div>
        <div style="position: absolute; right: 13px; top: 78px;">
          <h3 class="text-light-brown font-weight-bold my-3 text-custom3" style="font-size: 14px; width: 100px;">Tinggi Kandungan Likopen</h5>
          <p class="text-custom3" style="font-size: 10px; width: 120px;position: absolute;left: -10px;">Likopen mengandung antioksidan yang melimpah untuk meningkatkan sistem kekebalan tubuh.</p>
        </div>
      </div>

      <div class="col-sm-12 text-center">
        <h1 class="text-pink text-custom2 news-header-title my-5" style="font-size: 40px">Royal Jelly</h1>
      </div>
      <div class="col-sm-12" style="height: 298px">
        <center>
          <img src="{{asset('images/royal-jelly.png')}}" class="img-fluid" width="180" alt="primroses" style="margin-top: 54px;">
        </center>
        <img src="{{asset('images/pink-brush.png')}}" alt="" class="img-fluid" style="position: absolute; top:58px; left: 16%; width: 283px;opacity: 0.5;">
        <img src="{{asset('images/arrow-up-2.png')}}" class="img-fluid" alt="" style="position: absolute; width: 45px; top: 81px; right: 58px;">
        <img src="{{asset('images/arrow-right.png')}}" class="img-fluid" alt="" style="position: absolute; width: 59px; top: 73px; left: 63px;transform: rotate(190deg);">
        <img src="{{asset('images/arrow-up-2.png')}}" class="img-fluid" alt="" style="position: absolute; width: 45px; top: 159px; left: 87px;transform: rotate(123deg);">
        <div style="position: absolute; left: 29px; top: -53px;">
          <h3 class="text-light-brown text-custom3 font-weight-bold my-3" style="font-size: 14px; width: 100px;">Asam Amino</h5>
          <p class="text-left text-custom3" style="font-size: 10px; width: 140px;">Membentuk antibodi tubuh untuk menjaga tubuh dari zat asing yang masuk ke dalam tubuh.</p>
        </div>
        <div style="position: absolute; right: 4px; top: -53px;">
          <h3 class="text-light-brown text-custom3 font-weight-bold my-3" style="font-size: 14px; width: 100px;">Vitamin B Kompleks</h5>
          <p class="text-custom3" style="font-size: 10px; width: 119px;">Mengoptimalkan produksi energi dan mengoptimalkan penyerapan nutrisi.</p>
        </div>
        <div style="position: absolute; left: 33%; top: 166px;">
          <h3 class="text-light-brown text-custom3 font-weight-bold my-3" style="font-size: 14px; width: 100px;">Protein</h5>
          <p class="text-custom3" style="font-size: 10px; width: 150px;">Berperan meningkatkan sistem imun dan membangun sel, serta jaringan dalam tubuh.</p>
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
