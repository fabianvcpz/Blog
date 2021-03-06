<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('meta-title',  config('app.name') )</title>
    <meta name="description" content="@yield('meta-description', 'ESte es el blog test')">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/framework.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    @stack('style')



    <script src="{{ mix('js/app.js')}}"></script>

    @stack('script')
</head>
<body>
<div id="app">

    <div class="preload"></div>
    <header class="space-inter">
        <div class="container container-flex space-between">
            <figure class="logo"><img src="/img/logo.png" alt=""></figure>
        </div>
    </header>


    <p>Hola! Se ha reportado un nuevo caso de emergencia a las {{ $msg['email'] }}.</p>
    <p>Estos son los datos del usuario que ha realizado la denuncia:</p>
    <ul>
        <li>Nombre: {{ $msg['name'] }}</li>
        <li>Asunto: {{ $msg['subject'] }}</li>
    </ul>
    <p>Y esta es la posición reportada:</p>
    <ul>
        <p>Latitud: {{ $msg['message'] }}</p>

    </ul>

    <section class="footer">
        <footer>
            <div class="container">
                <figure class="logo"><img src="/img/logo.png" alt=""></figure>

                <div class="divider-2"></div>
                <p>Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor.</p>
                <div class="divider-2" style="width: 80%;"></div>
                <p>© 2017 - Zendero. All Rights Reserved. Designed & Developed by <span class="c-white">Agencia De La Web</span></p>
                <ul class="social-media-footer list-unstyled">
                    <li><a href="#" class="fb"></a></li>
                    <li><a href="#" class="tw"></a></li>
                    <li><a href="#" class="in"></a></li>
                    <li><a href="#" class="pn"></a></li>
                </ul>
            </div>
        </footer>
    </section>
    </div>


    </body>
    </html>
