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
        <h1 class="text-custom text-gray news-header-title obj-top-bounce">Ediva Pure</h1>
        <div class="row d-flex justify-content-start mt-5 obj-top-desc-bg">
          <div class="col-sm-3 obj-top-appear">
            <img src="{{asset('images/pure-obj-1.png')}}" title="meringankan pre-menstruasi" class="img-fluid" alt="ediva pure">
            <p class="text-center my-3">Meringankan Gejala Pre-Menstruasi</p>
          </div>
          <div class="col-sm-3 mx-5 obj-top-appear">
            <img src="{{asset('images/pure-obj-2.png')}}" title="meningkatkan kekebalan tubuh" class="img-fluid" alt="ediva pure">
            <p class="text-center my-3">Meningkatkan Sistem Kekebalan Tubuh</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="product-middle" class="container-fluid">
    <div class="row d-flex justify-content-between">
      <!-- left -->
      <div class="col-sm-6">
        <h1 class="text-custom text-gray text-right news-header-title" data-aos="fade-left">Ediva Young</h1>
        <div class="row d-flex justify-content-end mt-5 obj-middle-desc-bg">
          <div class="col-sm-3" data-aos="zoom-out">
            <img src="{{asset('images/young-obj-1.png')}}" title="meningkatkan produksi kolagen" class="img-fluid" alt="ediva young">
            <p class="text-center my-3">Meningkatkan Produksi Kolagen Pada Kulit</p>
          </div>
          <div class="col-sm-3 mx-5" data-aos="zoom-out">
            <img src="{{asset('images/young-obj-2.png')}}" width="88" title="membuat kulit menjadi lebih sehat dan elastis" class="img-fluid" alt="ediva young">
            <p class="text-center my-3">Membuat Kulit Menjadi Lebih Sehat dan Elastis</p>
          </div>
        </div>
      </div>
      <!-- right -->
      <div class="col-sm-6">
        <div class="obj-middle-1 mt-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-delay="500">
          <img src="{{asset('images/ediva_young.png')}}" title="Meiji Ediva Young" width="500" class="img-fluid" alt="">
        </div>
        <div class="obj-middle-2" data-aos="fade-down-left" data-aos-delay="1000">
          <img src="{{asset('images/product-obj-2.png')}}" width="165" class="img-fluid" alt="">
        </div>
      </div>

    </div>
  </section>

  <section id="product-bottom" class="container-fluid py-5">
    <!-- bottom 1 -->
    <div class="row d-flex justify-content-center my-5">
      <div class="col-sm-9">
        <div class="obj-bottom-title-bg"></div>
        <h1 class="text-pink text-custom news-header-title mb-5">Evening Primroses Oil</h1>
        <div class="row">
          <div class="col-sm-3" data-aos="fade-down-left">
            <div class="row" width="130">
              <div class="col-sm-12">
                <img src="{{asset('images/arrow-left.png')}}" class="img-fluid pull-right" alt="">
              </div>
              <div class="col-sm-12">
                <h3 class="text-brown font-weight-bold w-100 my-3">Omega 6<br>Fatty Acid</h5>
                <p>Bermanfaat untuk memaksimalkan proses metabolisme dan membantu mengoptimalkan proses regenerasi kulit dari dalam tubuh</p>
              </div>
            </div>
          </div>
          <!-- image -->
          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="2000">
            <img src="{{asset('images/primroses.png')}}" class="img-fluid" width="580" alt="primroses">
          </div>
          <!-- right -->
          <div class="col-sm-3" data-aos="fade-down-right" data-aos-delay="1000">
            <div class="row">
              <div class="col-sm-12">
                <img src="{{asset('images/arrow-right.png')}}" class="img-fluid" alt="">
              </div>
              <div class="col-sm-12">
                <h3 class="text-brown font-weight-bold my-3">Asam Gamma-linolenic</h5>
                <p>Berperan penting mengatasi masalah radang/inflamasi, terutama pada penyakit kulit</p>
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
        <h1 class="text-pink text-custom obj-bottom-title-2 mb-5 text-right">VIT E</h1>
        <div class="row">
          <div class="col-sm-3" data-aos="fade-down-left" data-aos-delay="1000">
            <div class="row">
              <div class="col-sm-12">
                <img src="{{asset('images/arrow-left.png')}}" width="130" class="img-fluid pull-right" alt="">
              </div>
              <div class="col-sm-12">
                <p class="my-3">Mendorong produksi kolagen yang berfungsi mengurangi jumlah garis halus dan tanda-tanda penuaan.</p>
              </div>
            </div>
          </div>
          <!-- image -->
          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="2000">
            <img src="{{asset('images/vit-e.png')}}" class="img-fluid" width="580" alt="primroses">
          </div>
          <!-- right -->
          <div class="col-sm-3" data-aos="fade-down-right">
            <div class="row">
              <div class="col-sm-12">
                <img src="{{asset('images/arrow-right.png')}}" class="img-fluid" alt="">
              </div>
              <div class="col-sm-12">
                <p class="my-3 text-right">Melancarkan sirkulasi darah dan menurunkan indikasi terjadinya sindrom pramenstruasi.</p>
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
        <h1 class="text-pink news-header-title text-custom mb-5">GAC Fruit</h1>
        <div class="row">
          <div class="col-sm-3" data-aos="fade-down-left">
            <div class="row">
              <div class="col-sm-12">
                <img src="{{asset('images/arrow-left.png')}}" width="130" class="img-fluid pull-right" alt="">
              </div>
              <div class="col-sm-12">
                <h3 class="text-brown font-weight-bold w-100 my-3">Tinggi Kandungan<br>Betacarotine</h5>
                <p>Membantu Melancarkan aliran darah dan meminimalisir rasa sakit saat premenstruasi.</p>
              </div>
            </div>
          </div>
          <!-- image -->
          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="2000">
            <img src="{{asset('images/gac-fruit.png')}}" class="img-fluid" width="580" alt="primroses">
          </div>
          <!-- right -->
          <div class="col-sm-3" data-aos="fade-down-right" data-aos-delay="1000">
            <div class="row">
              <div class="col-sm-12">
                <img src="{{asset('images/arrow-right.png')}}" data-aos="fade-down-right" class="img-fluid" alt="">
              </div>
              <div class="col-sm-12">
                <h3 class="text-brown font-weight-bold w-100 my-3">Lycopene 16 X<br>dari Buah Tomat</h5>
                <p class="text-right">Mengandung antioksidan yang melimpah untuk meningkatkan sistem kekebalan tubuh.</p>
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
        <h1 class="text-pink text-custom obj-bottom-title-2 mb-5 text-right">Royal Jelly</h1>
        <div class="row">
          <!-- top -->
          <div class="col-sm-12" data-aos="fade-up-left" data-aos-delay="3000">
            <div class="row d-flex justify-content-center">
              <div class="col-sm-4">
                <h3 class="text-brown font-weight-bold w-100 my-3 text-right">Asam Amino</h5>
                <p class="text-right">Membentuk antibodi tubuh untuk menjaga tubuh dari zat asing yang masuk ke dalam tubuh.</p>
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
                <h3 class="text-brown font-weight-bold w-100 my-3">Vitamin B<br>Complex</h5>
                <p>Mengoptimalkan produksi energi dan mengoptimalkan penyerapan nutrisi.</p>
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
                <h3 class="text-brown font-weight-bold w-100 my-3">Protein</h5>
                <p class="text-right">Berperan meningkatkan sistem imun dan membangun sel, serta jaringan dalam tubuh.</p>
              </div>
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
