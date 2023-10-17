<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="
        default-src 'self' https: data:;
        img-src 'self' https: http: data:;
        font-src 'self' https: data:;
        style-src 'self' https: 'unsafe-inline';
        script-src 'self' https: 'unsafe-inline' 'unsafe-eval';
    ">
    <title>Chaj gallery & Cafe ח״י - גלריה ובית קפה כשר </title>
    <!-- Fonts -->

    <!-- SEO -->
    <meta property="og:title" content="gazdaesbadogosbolt" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="gazdaesbadogosbolt" />
    <meta property="og:description" content="" />

    <link rel="schema.dcterms" href="http://purl.org/dc/terms/">
    <meta name="DC.coverage" content="Hungary" />
    <meta name="DC.description" content="" />
    <meta name="DC.format" content="text/html" />
    <meta name="DC.publisher" content="gazdaesbadogosbolt" />
    <meta name="DC.title" content="" />
    <!-- Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Slide css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
    <!-- App css -->
    <link rel="stylesheet" href="/css/app.css">


</head>

<body class="antialiased">
    <header>
        <nav class="navbar d-flex position-relative">
            <img class="navbar__one-img position-absolute" src="/img/header/logo2.png" alt="chajcafe">
            <div class="hamburger" id="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="navbar-logo-box">
                <img class="navbar-logo-box__img position-relative" src="/img/header/logo.png" alt="chajcafe">
            </div>
            <ul class="menu d-flex position-relative" id="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Chaj Café</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Shop</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>

        <div class="footer-content d-flex">
            <div class="footer-content__text-box">
                <h3 class="footer-content__text-box__h3">CONTACT</h3>
                <p class="footer-content__text-box__p"><a class="footer-content__text-box__p__link"
                        href="tel:+36301755386">06 30 175 5386</a></p>
                <p class="footer-content__text-box__p"><a class="footer-content__text-box__p__link"
                        href="mailto:chajgaleria@zsido.com">chajgaleria@zsido.com</a>
                </p>
                <p class="footer-content__text-box__p"><a class="footer-content__text-box__p__link" target="_blank"
                        href="https://www.google.com/maps/place/Szentendre,+P%C3%A1triarka+u.+6,+2000/@47.6689392,19.071962,17z/data=!3m1!4b1!4m6!3m5!1s0x4741d67cc8003111:0x9a30882e04f1d00d!8m2!3d47.6689356!4d19.0745369!16s%2Fg%2F11lkhz7d34?authuser=0&entry=ttu">2000
                        Szentendre, Patriarka utca 6.</a></p>
            </div>
            <div class="footer-content__logo-box">
                <img class="footer-content__logo-box__img" src="/img/header/logo.png" alt="chajcafe">
            </div>
            <div class="footer-content__link-box">
                <p class="footer-content__link-box__p"><a class="footer-content__link-box__p__link" href="/">Home</a>
                </p>
                <p class="footer-content__link-box__p"><a class="footer-content__link-box__p__link" href="#">About
                        us</a>
                </p>
                <p class="footer-content__link-box__p"><a class="footer-content__link-box__p__link" href="#">Events</a>
                </p>
                <p class="footer-content__link-box__p"><a class="footer-content__link-box__p__link" href="#">Shop</a>
                </p>
            </div>
        </div>

        <div class="copyright text-center">
            <h4 class="copyright__h4">MADE BY YOUSITE</h4>
        </div>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
        <script src="js/app.js"></script>
    </footer>
</body>

</html>