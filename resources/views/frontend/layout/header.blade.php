<div class="container mb-5">
  <div class="row d-flex justify-content-center">
    <div class="col-sm-11">
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="{{asset('images/logo.png')}}" title="meiji ediva" width="150" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ml-5">
            <li class="px-2 nav-item {{Route::currentRouteName() == 'home' ? 'active' : ''}}">
              <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="px-2 nav-item">
              <a class="nav-link" href="#">Product</a>
            </li>
            <li class="px-2 nav-item">
              <a class="nav-link" href="#">Article</a>
            </li>
            <li class="px-2 nav-item {{Route::currentRouteName() == 'company' ? 'active' : ''}}">
              <a class="nav-link" href="{{route('company')}}">PT Meiji Indonesia</a>
            </li>
            <li class="px-2 nav-item">
              <a class="nav-link" href="#">News & Event</a>
            </li>
            <li class="px-2 nav-item {{Route::currentRouteName() == 'faq' ? 'active' : ''}}">
              <a class="nav-link" href="{{route('faq')}}">FAQ</a>
            </li>
            <li class="px-2 nav-item {{Route::currentRouteName() == 'contact' ? 'active' : ''}}">
              <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>
