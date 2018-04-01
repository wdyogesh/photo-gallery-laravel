<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <title>Document</title>
</head>
<body>
     @include('inc.topbar')
     <div class="container">
         @include('inc.message')
         @yield('content')
     </div>
     <script href="{{url('js/app.js')}}"></script>
</body>
</html>