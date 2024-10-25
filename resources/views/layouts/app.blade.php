<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield("meta")
    <title>@yield("page-title", "")</title>
    @yield("cdn")
</head>
<body>
    {{--Includi header--}}
    @include("partials.header")

    {{--Inserisci i contenuti da chi estende--}}
    <main>
        @yield("main-content")
    </main>

    {{--Includi footer--}}
    @include("partials.footer")


    @yield("scripts")
    @vite("resources/js/app.js")
</body>
</html>
