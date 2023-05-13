<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        @vite(['resources/sass/app.scss','resources/js/app.js'])

        {{-- calendar --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

        {{-- custom js --}}
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/calendar.js') }}"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top">
            
              <div class="container-fluid">
                <a class="navbar-brand text-white" href="#"><h3>BATAAN VAN RENTAL</h3></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                      <a class="nav-link text-white active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#">SERVICES</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#">LOCATION</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#">ABOUT</a>
                    </li>
                    @guest
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#" data-bs-toggle="modal" data-bs-target="#signup-modal">SIGN UP</a>
                    </li>
                    @endguest
                    {{-- <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li> --}}
                  </ul>
                  @guest
                  <form class="d-flex" role="search">
                    {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> --}}
                    <button class="nav-btn p-2" type="button" data-bs-toggle="modal" data-bs-target="#login-modal">JOIN US AND START EARNING</button>
                  </form>
                  @else
                  <ul class="navbar-nav ">
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>
                  
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                  
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
                  </ul>
                
                  @endguest
                 
                </div>
              </div>
             
                
             
        </nav>
       
        <main>
            @if(Auth::check())
              <script>
                window.history.pushState(null, '', location.href);
                window.onpopstate = function() {
                    window.history.pushState(null, '', location.href);
                };
              </script>
            @endif

            @yield('content')
            @yield('modal')
            @yield('modal-signup')
            @yield('details-modal')
            @yield('frequently')
            {{-- @yield('content') --}}
             {{-- login modal --}}
           
        </main>

        <footer class="bg-info" style="height: 5em">
            
        </footer>
    </body>
</html>
