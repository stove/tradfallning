<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Trädfällning Gräskö AB') }}</title>
{{--    old from php site --}}
    <meta name="description" content="Trädfällning Gräskö AB verkar i Roslagen och norra skärgården. Vi utför trädfällning, flisning, stubbfräsning
,röjning i skog och trimmning av trädgårdar."/>
    <meta name="keywords" content="Trädfällning, stubbfräsning, skärgården, Norrtälje, Roslagen">
    <meta property="og:url" content="https://tradfallningroslagen.se"/>
    <meta property="og:description" content="Trädfällning Gräskö AB verkar i Roslagen och norra skärgården. Vi utför trädfällning, flisning, stubbfräsning
,röjning i skog och trimmning av trädgårdar."/>
    <meta property="og:site_name" content="Trädfällning Gräskö AB"/>
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link href="https://tradfallninggrasko.se" rel="canonical"/>
    <!-- End old code-->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-900 py-6">
            <div class="container mx-auto sm:px-4 mx-auto flex justify-between ">
                <div>
                    <a href="{{ url('/home') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', "My Name")
}}
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        @yield('content')
    </div>
</body>
</html>
