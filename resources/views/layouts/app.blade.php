<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hexlet Blog - @yield('title')</title>
  <meta name="csrf-token" content="{{csrf_token() }}">
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
  <div class="container mt-4">
    <h1>@yield('header')</h1>
    <a href="{{ route('articles.index') }}">Статьи </a>
  </div>
  <div class="container mt-4">
    @yield('content')
  </div>
</body>
</html>