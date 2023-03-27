<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="{{ asset("js/tailwind.js") }}"></script>
  <link rel="stylesheet" href="{{ asset("css/global.css") }}">
  <title>@yield('title') |  AirJet </title>
</head>
<body>
  @yield('content')
</body>
</html>
