<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title", "to-do app")</title>
    <link href="{{asset("build\assets\css\bootstrap.css")}}" rel="stylesheet">
    @yield("style")
  </head>

  <body class="d-flex flex-column h-100">
    @include('include.header')
    @yield('content')
    @include('include.footer')
    <script src="{{asset("build\assets\js\bootstrap.min.js")}}"></script>
  </body>
</html>