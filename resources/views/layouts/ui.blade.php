<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="images/icoinWebsite.png" type="image/x-icon" />
        <link rel="apple-touch-icon" href="/images/apple-icon.png">
        <title>{{ config('app.name', 'Đồ chơi xe đồ sơn Hải Phòng các loại chất lượng cao') }}</title>
        <meta name="description" content="Đồ chơi xe đồ sơn,Đồ chơi xe Hải Phòng, Độ xe đồ sơn, Độ xe Hải Phòng, Team dán xe Hải phòng, Team dán xe Đồ Sơn, Decal Đồ Sơn,dán tem xe máy tại đồ sơn, dán tem xe máy tại hải phòng, dán decal xe máy tại đồ sơn, Gương, Tay phanh, Phuộc, .">
        <meta name="robots" content="index, follow">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ config('app.name', 'Đồ chơi xe đồ sơn Hải Phòng các loại chất lượng cao') }}">
        <meta property="og:description" content="Đồ chơi xe đồ sơn,Đồ chơi xe Hải Phòng, Độ xe đồ sơn, Độ xe Hải Phòng, Team dán xe Hải phòng, Team dán xe Đồ Sơn, Decal Đồ Sơn, Gương, Tay phanh, Phuộc.">
        <link rel="canonical" href="{{ url()->current() }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MRWH3TKVQD"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-MRWH3TKVQD');
    </script>
    <body>
        <header>
            @include('includes/header')
        </header>
        <main>
            {{ $slot }}
            @include('includes.sidebar')
            @include('includes.scroll')
        </main>
        <footer>
            @include('includes/footer')
        </footer>
    </body>
</html>
