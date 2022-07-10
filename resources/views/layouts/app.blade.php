<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Catalogo') }}</title>
        
        @yield('styles')
        <!-- Styles -->
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
        <!-- Scripts -->
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="https://kit.fontawesome.com/2b59d0a5dd.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar  -->
            @include('partials.sidebar')
            <!-- Page Content  -->
            <div id="content">
                @include('partials.nav')
                
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        
        @yield('scripts')
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        {{-- <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script> --}}
        {{-- @vite('js/jquery.min.js') --}}
    </body>
</html>
