<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Dynamic title and description -->
    <title>{{ $title ?? 'Gräskö Trädfällning AB' }}</title>
    <meta name="description" content="{{ $description ?? 'Default description.' }}">
    {{--    old from php site --}}

    <meta name="keywords" content="{{ $keywords ?? 'Trädfällning' }}">
    <meta property="og:url" content="https://tradfallningroslagen.se"/>
    <meta property="og:description" content="{{ $description ?? 'Default description.' }}"/>
    <meta property="og:site_name" content="Trädfällning Gräskö AB"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500&family=Quicksand:wght@300;400;500;600;700&family=Spartan:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
