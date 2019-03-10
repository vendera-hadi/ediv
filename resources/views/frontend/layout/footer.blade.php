<div class="footer-box container-fluid mt-5 py-5 text-center">
  <img src="{{asset('images/logo.png')}}" title="meiji ediva" alt="">
  <!-- short desc -->
  <div class="row d-flex justify-content-center mt-3">
    <div class="col-md-6">
      <p class="text-brown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
  <!-- sitemap -->
  <div id="sitemap" class="row d-flex justify-content-center mt-3">
    <ul class="col-sm-6 d-flex flex-md-row flex-column justify-content-center text-md-left">
      <li class="list-inline-item p-3 text-uppercase">
          <a href="" class="text-brown font-weight-bold btn">Home</a>
      </li>
      <li class="list-inline-item p-3 text-uppercase">
          <a href="" class="text-brown font-weight-bold btn">About</a>
      </li>
      <li class="list-inline-item p-3 text-uppercase">
          <a href="" class="text-brown font-weight-bold btn">Product</a>
      </li>
      <li class="list-inline-item p-3 text-uppercase">
          <a href="" class="text-brown font-weight-bold btn">Blog</a>
      </li>
      <li class="list-inline-item p-3 text-uppercase">
          <a href="" class="text-brown font-weight-bold btn">Contact</a>
      </li>
    </ul>
  </div>
  <!-- sosmed -->
  <div class="row d-flex justify-content-center mt-3">
    <ul class="col-sm-6 d-flex flex-sm-row justify-content-center text-sm-left">
      <li class="list-inline-item px-3 py-1">
        <a href="" title="instagram ediva">
          <img src="{{asset('images/instagram.png')}}" width="35" title="instagram ediva" alt="instagram ediva">
        </a>
      </li>
      <li class="list-inline-item px-3 py-1">
        <a href="" title="facebook ediva">
          <img src="{{asset('images/facebook.png')}}" width="19" title="facebook ediva" alt="facebook ediva">
        </a>
      </li>
      <li class="list-inline-item px-3 py-1">
        <a href="" title="twitter ediva">
          <img src="{{asset('images/twitter.png')}}" width="41" title="twitter ediva" alt="twitter ediva">
        </a>
      </li>
    </ul>
  </div>
  <!-- newsletter -->
  <div class="row d-flex justify-content-center mt-3">
    <div class="col-md-3">
      <h5 class="text-brown text-uppercase">Newsletter</h3>
      <form action="{{route('subscribe')}}" method="post">
        @csrf
        <div class="input-group mb-3 border-brown">
          <input type="text" name="email" class="form-control border-0" placeholder="Email Address" required>
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
