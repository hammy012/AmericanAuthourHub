<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

    <title>@yield('title', 'Ebook | Book Writing Company')</title>

    <!-- Font Awesome (CDN or local) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <meta name="title" content="@yield('meta_title', 'Ebook  | Book Writing Company')">
    <meta name="description" content="@yield('meta_description', 'Become a published author with Ebook . Our professional writers offer exceptional book writing services.')">
    <link rel="canonical" href="{{ url()->current() }}" />

    <meta property="og:image" content="{{ asset('assets/images/logo.png') }}">
    <!-- other meta tags... -->

    <!-- CSS from public/assets -->
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/christmas.css') }}">

    <link rel="shortcut icon" href="{{ asset('fav.png') }}" type="image/x-icon">
</head>
<body>

    @include('layouts.navbar')

    <main>
      @yield('content')
    </main>

    @include('layouts.footer')

    <!-- Scripts: load from public/assets (defer optional) -->
    <script src="{{ asset('assets/js/jquery.js') }}" defer></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/clock.js') }}" defer></script>
    <script src="{{ asset('assets/js/custom.js') }}" defer></script>
    <script src="{{ asset('assets/js/wow.min.js') }}" defer></script>

    @stack('scripts')
</body>
</html>
