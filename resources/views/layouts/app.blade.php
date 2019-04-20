<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app1">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                @guest
                @else
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav m-auto">
                      <li class="px-2 nav-item {{Route::currentRouteName() == 'admin.home' ? 'font-weight-bold' : ''}}">
                        <a class="nav-link" href="{{route('admin.home')}}">Slider</a>
                      </li>
                      <li class="px-2 nav-item {{Route::currentRouteName() == 'admin.news' ? 'font-weight-bold' : ''}}">
                        <a class="nav-link" href="{{route('admin.news')}}">News</a>
                      </li>
                      <li class="px-2 nav-item {{Route::currentRouteName() == 'admin.event' ? 'font-weight-bold' : ''}}">
                        <a class="nav-link" href="{{route('admin.event')}}">Event</a>
                      </li>
                      <li class="px-2 nav-item {{Route::currentRouteName() == 'admin.article' ? 'font-weight-bold' : ''}}">
                        <a class="nav-link" href="{{route('admin.article')}}">Article</a>
                      </li>
                      <li class="px-2 nav-item {{Route::currentRouteName() == 'admin.newsletter' ? 'font-weight-bold' : ''}}">
                        <a class="nav-link" href="{{route('admin.newsletter')}}">Newsletter</a>
                      </li>
                      <li class="px-2 nav-item {{Route::currentRouteName() == 'admin.contactlog' ? 'font-weight-bold' : ''}}">
                        <a class="nav-link" href="{{route('admin.contactlog')}}">Contact Log</a>
                      </li>
                      <li class="px-2 nav-item {{Route::currentRouteName() == 'admin.faq.index' ? 'font-weight-bold' : ''}}">
                        <a class="nav-link" href="{{route('admin.faq.index')}}">FAQ</a>
                      </li>
                      <li class="px-2 nav-item {{Route::currentRouteName() == 'admin.content.index' ? 'font-weight-bold' : ''}}">
                        <a class="nav-link" href="{{route('admin.content.index')}}">Web Content</a>
                      </li>
                    </ul>
                    @endguest

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('admin.setting') }}">
                                    Change Password
                                  </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-header">@yield('title')</div>

                          <div class="card-body">
                              @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                              @endif
                              @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                              @endif

                              @yield('content')
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </main>
    </div>
</body>
</html>
