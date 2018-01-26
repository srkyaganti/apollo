<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
    <style>
        #sidebar {
            border-right: 1px solid lightgrey;
            height: 88vh;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="row">
            @include('_includes.navbar')
        </div>

        <div id="main" class="row">

            <!-- sidebar content -->
            <div id="sidebar" class="col-md-2">
                @include('_includes.sidebar')
            </div>

            <!-- main content -->
            <div id="content" class="col-md-10">
                <div class="container">
                    @include('_partials.success')
                    @include('_partials.info')
                    @yield('content')
                </div>
            </div>

        </div>

        <div id="main">
                
        </div>
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
