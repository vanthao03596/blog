<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:700|Source+Code+Pro" rel="stylesheet">
    <script defer src="{{ mix('js/app.js') }}"></script>
</head>

<body class="bg-white font-sans leading-normal tracking-normal">
    <div class="container px-4 md:px-0 max-w-2xl mx-auto">
        <div class="mx-0 sm:mx-6">
            @include('front.layouts.partials._nav') @yield('content')
            @include('front.layouts.partials._subscribe')
            @include('front.layouts.partials._author')
        </div>
    </div>
    @include('front.layouts.partials._footer')
    <script>
        document.getElementById('nav-toggle').onclick = function(){
            document.getElementById("nav-content").classList.toggle("hidden");
        }
    </script>
</body>

</html>
