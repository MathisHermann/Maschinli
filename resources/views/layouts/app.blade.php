<!doctype html>
<html class="h-full" lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Maschinli</title>
    @livewireStyles
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="h-full">
<div
    x-data="{ show_sidebar : false }"
    class="min-h-full">
    {{ $slot }}
</div>
@livewireScripts
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
