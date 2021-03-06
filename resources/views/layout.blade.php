<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
    </head>
    <body>
        <h1>@yield('header')</h1>
             
            @yield('conteudo')
        <a href="{{route('materiais.index')}}">Materiais</a><br>
        <a href="{{route('requisicoes.index')}}">Requisições</a><br>
        <a href="{{route('requisitantes.index')}}">Requisitantes</a><br>
        <a href="{{route('tiposequipamentos.index')}}">Tipos de Equipamentos</a><br>
        <a href="{{route('tiposrequisitantes.index')}}">Tipos de Requisitantes</a><br>
              
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.js')}}"></script>
    </body>

</html>