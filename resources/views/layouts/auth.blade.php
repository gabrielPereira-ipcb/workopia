<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title", "to-do app")</title>
    <link href="{{asset("build\assets\css\bootstrap.css")}}" rel="stylesheet">
    @yield("style")
  </head>

  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    @yield('content')
    <script src="{{asset("build\assets\js\bootstrap.min.js")}}"></script>
  </body>
</html>