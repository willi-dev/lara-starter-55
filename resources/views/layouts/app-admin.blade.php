<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>
      Laravel 5.5 Starter with Adminator Template
    </title>
    @include('_partials.style-inline-admin')
    <link href="{{ asset('admin-templates/style.css') }}" rel="stylesheet">
  </head>
<body class="app">
  @include('_partials.loader-spinner')
  @yield('content-admin')
  <script type="text/javascript" src="{{ asset('admin-templates/vendor.js') }}"></script>
  <script type="text/javascript" src="{{ asset('admin-templates/bundle.js') }}"></script>
</body>
</html>