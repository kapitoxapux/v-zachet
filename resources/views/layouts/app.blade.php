<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> -->
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">
        <!-- <link href="https://cdn.jsdelivr.net/npm/vuetify@2.3.8/dist/vuetify.min.css" rel="stylesheet"> -->
        
        @yield('styles')
    </head>
    <body>
        <div id="app">
            <v-app>
                <header>
                    @include('layouts.nav')
                </header>
                    
                @yield('content')
                    <!-- <main class="">
                        
                    </main> -->
            </v-app>
        </div>
    </body>
    @yield('scripts')
</html>
