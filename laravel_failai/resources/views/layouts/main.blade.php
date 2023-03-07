<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Option 1: CoreUI for Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous">

    <!-- Option 2: CoreUI PRO for Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.4.3/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-DN37sKXjXaUfTUzPFe9B4+RwDGdqbWhLExfnr8IeOt7w92aTL9JVv33fauH+K9Ok" crossorigin="anonymous"> -->

    <title>@yield('title', config('app.name', 'PostOp'))</title>
</head>
<body>

@yield('content', 'Default page content')

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: CoreUI for Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/js/coreui.bundle.min.js" integrity="sha384-n0qOYeB4ohUPebL1M9qb/hfYkTp4lvnZM6U6phkRofqsMzK29IdkBJPegsyfj/r4" crossorigin="anonymous"></script>

<!-- Option 2: CoreUI PRO for Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.4.3/dist/js/coreui.bundle.min.js" integrity="sha384-tU8pBuKH8C5qCFFE4VwJAI5CQPBhx1eOFhRGzWYJrXQ2+H1vjHfq2ljV2RLNGzHr" crossorigin="anonymous"></script>

<!-- Option 3: Separate Popper and CoreUI/CoreUI PRO  for Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity=" sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/js/coreui.min.js" integrity="sha384-2hww80ziDjQXYpFulPf5tfdCCXLTxn70HdSwL9MfeEvpS0kjfHd1iaBRsLpnuaSC" crossorigin="anonymous"></script>
or
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.4.3/dist/js/coreui.min.js" integrity="sha384-V9Xo/Ul3Ncvk/GYHzQKG6XA/nRynmiKho8yZYKfpmHr4q/8lUKVVL8Jz/ODLPpGt" crossorigin="anonymous"></script>
-->
</body>
</html>

{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark" class="dark">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>@yield('title', config('app.name', 'PostOp'))</title>--}}

{{--    <!--Let browser know website is optimized for mobile-->--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>--}}
{{--    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.0.0/dist/themes/light.css"/>--}}
{{--    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.0.0/dist/shoelace.js"></script>--}}
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
{{--    <script>--}}
{{--        // On page load or when changing themes, best to add inline in `head` to avoid FOUC--}}
{{--        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {--}}
{{--            document.documentElement.classList.add('dark')--}}
{{--        } else {--}}
{{--            document.documentElement.classList.remove('dark')--}}
{{--        }--}}

{{--        // Whenever the user explicitly chooses light mode--}}
{{--        localStorage.theme = 'light'--}}

{{--        // Whenever the user explicitly chooses dark mode--}}
{{--        localStorage.theme = 'dark'--}}

{{--        // Whenever the user explicitly chooses to respect the OS preference--}}
{{--        localStorage.removeItem('theme')--}}
{{--    </script>--}}

{{--    <link rel="stylesheet" href="{{asset('/css/app.css')}}"/>--}}
{{--    <script type="module" src="{{asset('/js/mano.js')}}"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="main_grid">--}}
{{--    @include('layouts.header')--}}
{{--    <div class="lg:px-8 justify-center">--}}
{{--        @yield('content', 'Default page content')--}}
{{--    </div>--}}
{{--    <br>--}}
{{--    @include('layouts.footer')--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
