<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', '本登録') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/vendor/moment.js') }}"></script>
  <script src="{{ asset('js/vendor/moment-with-locales.js') }}"></script>
  <script src="{{ asset('js/vendor/bootstrap-datetimepicker.js') }}"></script>
  </head>

  <body>
  
    @yield('header')

  <div class="main">
    @yield('content')
  </div>
  <!-- /.main -->
  <!-- footer -->
    @yield('footer')
  <!-- / footer -->
  <script type="{{ asset('js/script.js') }}"></script>

    @yield('scripts')
  </body>

</html>