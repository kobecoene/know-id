<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{  csrf_token() }}">

    <title>{{ config('app.name', 'KnowId') }}</title>


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Script -->
    <script src="{{ asset('js/app.js') }}" defer></script>


</head>
<body>
@include('partials.header')

@include('partials.sidebar')

<main class="container mt-5" id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 offset-2">
                @include('partials.alerts')
                @yield('content')
            </div>
        </div>
    </div>
</main>

@include('partials.footer')

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
