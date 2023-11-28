<!DOCTYPE html>
<html lang="pt-br">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  {{-- css --}}
  <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
  
  {{-- Fonte(s) --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Changa+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">

  {{-- Icone na guia --}}
  <link rel="shortcut icon" href="{{asset('user/img/Daco_583825.png')}}" type="image/x-icon">
  
  <title>GetJob - @yield('subtitulo')</title>
</head>
<body>
    @yield('conteudo')
</body>
    @yield('modal')
</html>