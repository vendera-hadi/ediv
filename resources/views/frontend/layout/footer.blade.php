<div class="footer-box container-fluid py-5 text-center">
  <img src="{{asset('images/logo.png')}}" title="meiji ediva" alt="">
  <!-- short desc -->

  <!-- sitemap -->
  <div id="sitemap" class="row d-flex justify-content-center mt-3">
    <ul class="col-sm-6 d-flex flex-md-row flex-column justify-content-center text-md-left">
      <li class="list-inline-item p-3 text-uppercase">
          <a href="{{route('home')}}" class="text-brown font-weight-bold btn">Beranda</a>
      </li>
      <li class="list-inline-item p-3 text-uppercase">
          <a href="{{route('company')}}" class="text-brown font-weight-bold btn">Tentang</a>
      </li>
      <li class="list-inline-item p-3 text-uppercase">
          <a href="{{route('product')}}" class="text-brown font-weight-bold btn">Produk</a>
      </li>
      <li class="list-inline-item p-3 text-uppercase">
          <a href="{{route('article')}}" class="text-brown font-weight-bold btn">Artikel</a>
      </li>
      <li class="list-inline-item p-3 text-uppercase">
          <a href="{{route('contact')}}" class="text-brown font-weight-bold btn">Kontak</a>
      </li>
    </ul>
  </div>
  <!-- sosmed -->
  <div class="row d-flex justify-content-center mt-3">
    <ul class="col-sm-6 d-flex flex-sm-row justify-content-center text-sm-left">
      <li class="list-inline-item px-3 py-1">
        @php
          $cnt = App\Models\Content::where('key','footer.instagram')->first();
        @endphp
        <a href="{!! !empty($cnt->value) ? $cnt->value : "#" !!}" title="instagram ediva">
          <img src="{{asset('images/instagram.png')}}" width="35" title="instagram ediva" alt="instagram ediva">
        </a>
      </li>
      <li class="list-inline-item px-3 py-1">
        @php
          $cnt = App\Models\Content::where('key','footer.facebook')->first();
        @endphp
        <a href="{!! !empty($cnt->value) ? $cnt->value : "#" !!}" title="facebook ediva">
          <img src="{{asset('images/facebook.png')}}" width="19" title="facebook ediva" alt="facebook ediva">
        </a>
      </li>
      
    </ul>
  </div>
  <!-- newsletter -->
  <div class="row d-flex justify-content-center mt-3">
    <div class="col-md-3">
      <h5 class="text-brown text-uppercase">Ikuti Berita</h3>
      <form action="{{route('subscribe')}}" method="post">
        @csrf
        <div class="input-group mb-3 border-brown">
          <input type="text" name="email" class="form-control border-0" placeholder="Alamat Email" required>
          <div class="input-group-append">
            <button class="btn btn-brown rounded-0" type="submit">></button>
          </div>
        </div>
      </form>
      @if(session('message'))
      <script type="text/javascript">
        alert("{{session('message')}}")
      </script>
      @endif
    </div>
  </div>
</div>
