<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blade prueba</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>

<!-- cabecera -->
<div class="container">
   @yield('header')
</div>


<!-- contenido -->
<div class="container">
  @yield('content')
</div>


<!-- pie -->
<div class="container">
  @yield('footer')
</div>
    
</body>
</html>