<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css">

    <title>BDE Cesi La Rochelle</title>
</head>

<body>

@include('inc.navbar')

@yield('content')

   @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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


<footer>
    <a href="mentions">Mentions Légales</a>
    <span>-</span>
    <a href="confidentialité">Politique de Confidentialité</a>
</footer>


@include('inc.logReg')
</body>

</html>

{{-- Script for responsive top nav --}}
<script>
    function expandLinks() {
        var x = document.getElementById("myTopnav");
        if (x.className === "top-nav") {
            x.className += " responsive";
        } else {
            x.className = "top-nav";
        }
    }
</script>