<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <meta
        name="description"
        content="@yield(
            'meta_description',
            'Saegis Campus provides quality higher education and internationally recognized academic programmes in Sri Lanka.'
        )"
    >

    <title>@yield('title', 'Saegis Campus')</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    @stack('styles')
</head>

<body>
    <a class="skip-link" href="#main-content">
        Skip to main content
    </a>

    @include('partials.topbar')
    @include('partials.header')
    @include('partials.navigation')

    <main id="main-content">
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts')
</body>
</html>