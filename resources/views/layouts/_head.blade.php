<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cheers') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ mix('fonts/league-spartan/league-spartan.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/tw.css') }}">
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
