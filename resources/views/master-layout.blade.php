<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ URL::asset('imgs/Logo-OliveGreen.svg') }}" type="image/x-icon">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/90e6b652b7.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.1.96/css/materialdesignicons.min.css"
        integrity="sha512-NaaXI5f4rdmlThv3ZAVS44U9yNWJaUYWzPhvlg5SC7nMRvQYV9suauRK3gVbxh7qjE33ApTPD+hkOW78VSHyeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/nav-style.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}" />

</head>

<body>
    <header class="header-black">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('home') }}" class="brand-light-img-link">
                    <img src="{{ URL::asset('imgs/Logo-White.png') }}" class="brand-img" alt="">
                </a>
                <a href="{{ route('home') }}" class="brand-dark-img-link d-none">
                    <img src="{{ URL::asset('imgs/Logo-Dark.png') }}" class="brand-img" alt="">
                </a>
                <div class="d-none d-md-block">
                    <ul class="links d-flex gap-4 text-decoration-none list-unstyled">
                        <li><a href="{{ route('home') }}" class="nav-link text-white-link-mod">Home</a></li>
                        <li><a href="{{ route('about') }}" class="nav-link text-white-link-mod">About</a></li>
                        <li><a href="{{ route('projects') }}" class=" nav-link text-white-link-mod">Projects</a></li>
                        <li><a href="{{ route('contacts') }}" class=" nav-link text-white-link-mod">Contacts</a></li>
                    </ul>
                </div>
                <p class="menu d-md-none cta text-white-mod" style="letter-spacing: 2px;">MENU</p>
            </div>
        </div>
    </header>
    <div class="overlay">
        <a class="close">&times;</a>
        <div class="overlay__content">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('projects') }}">Projects</a>
            <a href="{{ route('contacts') }}">Contacts</a>
        </div>
    </div>
    {{-- <header class="header-white">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{route('home')}}">
                    <img src="{{ URL::asset('imgs/Logo-Dark.png') }}" class="brand-img" alt="">
                </a>
                <div class="d-none d-md-block">
                    <ul class="links d-flex gap-4 text-decoration-none list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-dark-link-mod">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-dark-link-mod">About</a></li>
                        <li><a href="" class="text-dark-link-mod">Projects</a></li>
                        <li><a href="" class="text-dark-link-mod">Contacts</a></li>
                    </ul>
                </div>
                <p class="cta text-dark-link-mod" style="letter-spacing: 2px;">MENU</p>
            </div>
        </div>
    </header> --}}
    @yield('content')
    <footer>
        <div class="container">
            <div class="d-md-flex align-items-center justify-content-between footer-content">
                <img src="{{ URL::asset('imgs/Logo-White.png') }}" class="brand-img my-3 p-sm-3" alt="">
                <span class="text-white my-3 p-sm-3">Copyright © {{ date('Y') }}</span>
                <ul class="links d-flex my-3 gap-4 text-decoration-none list-unstyled">
                    <li><a href="https://www.linkedin.com/in/somerajoncyrel/" class="text-white-link-mod"
                            target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/cycycyyy" class="text-white-link-mod" target="_blank"><i
                                class="mdi mdi-github"></i></a></li>
                    <li><a href="" class="text-white-link-mod"><i class="fab fa-instagram-square"
                                target="_blank"></i></a></li>
                    <li><a href="" class="text-white-link-mod"><i class="fab fa-facebook-square"
                                target="_blank"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="{{ URL::asset('js/nav-js.js') }}"></script>
<script>
    let isHeaderWhite = false;
    let isTextWhiteLinkMod = false;
    let isMenuBlackMod = false;
    let isBrandLightImgLinkVisible = true;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            if (!isHeaderWhite) {
                $("header").fadeOut('fast', function() {
                    $(this).addClass('header-white');
                    $(this).removeClass('header-black');
                    $(this).fadeIn('fast');
                });
                isHeaderWhite = true;
            }
            if (!isTextWhiteLinkMod) {
                $(".nav-link").fadeOut('fast', function() {
                    $(this).addClass('text-dark-link-mod');
                    $(this).removeClass('text-white-link-mod');
                    $(this).fadeIn('fast');
                });
                isTextWhiteLinkMod = true;
            }
            if (!isMenuBlackMod) {
                $(".menu").fadeOut('fast', function() {
                    $(this).addClass('text-black-mod');
                    $(this).removeClass('text-white-mod');
                    $(this).fadeIn('fast');
                });
                isMenuBlackMod = true;
            }
            if (isBrandLightImgLinkVisible) {
                $(".brand-light-img-link").fadeOut('fast', function() {
                    $(this).addClass('d-none');
                    $(".brand-dark-img-link").removeClass('d-none');
                    $(this).fadeIn('fast');
                });
                isBrandLightImgLinkVisible = false;
            }
        } else {
            if (isHeaderWhite) {
                $("header").fadeOut('fast', function() {
                    $(this).removeClass('header-white');
                    $(this).addClass('header-black');
                    $(this).fadeIn('fast');
                });
                isHeaderWhite = false;
            }
            if (isTextWhiteLinkMod) {
                $(".text-dark-link-mod").fadeOut('fast', function() {
                    $(this).addClass('text-white-link-mod');
                    $(this).removeClass('text-dark-link-mod');
                    $(this).fadeIn('fast');
                });
                isTextWhiteLinkMod = false;
            }
            if (isMenuBlackMod) {
                $(".menu").fadeOut('fast', function() {
                    $(this).addClass('text-white-mod');
                    $(this).removeClass('text-black-mod');
                    $(this).fadeIn('fast');
                });
                isMenuBlackMod = false;
            }
            if (!isBrandLightImgLinkVisible) {
                $(".brand-dark-img-link").fadeOut('fast', function() {
                    $(this).addClass('d-none');
                    $(".brand-light-img-link").removeClass('d-none');
                    $(this).fadeIn('fast');
                });
                isBrandLightImgLinkVisible = true;
            }
        }
    });
</script>
<script>
    var lightbox = GLightbox({
        //height: '100vh', These options seem to have no effect.
        //width: 'auto', 
        loop: true
    });
</script>
