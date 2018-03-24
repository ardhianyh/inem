<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ilang Nemu</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/awesome/css/awesome.min.css') }}">
    
</head>
<body class="body">
    <div id="app">
        <header class="header header-md navbar box-shadow">
            <div class="navbar-header aside-md dk">
              <a class="btn btn-link visible-xs" data-toggle="modal" data-target="#footer">
                <i class="fa fa-bars"></i>
              </a>
              <a href="{{ url('/') }}" class="navbar-brand">
                <span class="hidden-nav-xs">Ilang Nemu</span>
              </a>
              </a>
              <a class="btn btn-link visible-xs" data-toggle="modal" data-target="#account">
                <i class="fa fa-user"></i>
              </a>
            </div>
            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
                @guest
                <li>
                    <a href="{{ route('login') }}" class="btn">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="btn">Register</a>
                </li>
                @else
                  <li>
                    <a href="{{ route('content.add') }}" class="btn"><i class="fa fa-plus"></i> Ngiklan disini!</a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="thumb-sm avatar pull-left">
                        @if(Auth::user()->avatar)
                          <img src="{{ asset('storage/'.Auth::user()->avatar) }}" alt="img-profile">
                        @else
                          <img src="{{ asset('storage/avatar/default.jpeg') }}" alt="">
                        @endif
                      </span>
                      {{ Auth::user()->username }} <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight">            
                      <li>
                        <span class="arrow top"></span>
                        <a href="{{ route('profile.setting', Auth::user()->idx) }}">Settings</a>
                      </li>
                      <li>
                        <a href="{{ route('profile') }}">Profile</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </li>
                    </ul>
                </li>
                @endguest
            </ul>      
          </header>

        

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="footerLand">
          <div class="footerCont container">
           <div class="row">
             <div class="col-md-3">
               <div class="logo-center">
                 <button class="btn btn-sm btn-info" > Logo Inem </button>
               </div>
               <p class="foo-link">
                 <a href="#">Tentang Kami</a>
               </p>
               <p>
                 <a href="#">Fungsi & Fitur Inem</a>
               </p>
             </div>
             <div class="col-md-3">
               <div class="foo-title">
                 <h4>Ngiklan</h4>
               </div>
                <p class="foo-link"><a href='#' class='link'>Ketentuan Ngiklan</a></p>
                <p class="foo-link"><a href='#' class='link'>Tata Cara Ngiklan</a></p>
                <p class="foo-link"><a href='#' class='link'>Tips COD</a></p>
             </div>
             <div class="col-md-3">
                <div class="foo-title">
                 <h4>Bantuan</h4>
               </div>
                <p class="foo-link"><a href='#' class='link'>Hubungi Kami</a></p>
                <p class="foo-link"><a href='#' class='link'>FAQ</a></p>
                <p class="foo-link"><a href='#' class='link'>Syarat & Ketentuan</a></p>
                <p class="foo-link"><a href='#' class='link'>Kebijakan Privasi</a></p>
             </div>
             <div class="col-md-3">
               <div class="logo-center">
                 <ul class="breadcrumbs-list">
                   <li>
                     <h4>Downloads Android</h4>
                   </li>
                   <li>
                     <h4>Downloads IOS</h4>
                   </li>
                 </ul>
               </div>
               <div class="text-center">
                 <p id="social-buttons">
                  <a href="#" class="btn btn-sm btn-icon btn-info"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-primary"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="btn btn-sm btn-icon btn-danger"><i class="fa fa-google-plus"></i></a>
                </p>
               </div>
             </div>
           </div>
          </div>
      </footer>
    </div>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/file-input.min.js') }}" defer></script>

</body>
</html>
