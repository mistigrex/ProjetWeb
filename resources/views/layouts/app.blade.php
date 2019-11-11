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