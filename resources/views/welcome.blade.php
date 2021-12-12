<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @php
        $color = "red";
        $aler  = "alert";
    @endphp

    <div class="container mx-auto">
        <x-alert color="{{$color}}" class="mb-4">
            PELIGRO
        </x-alert>
    </div>
    <div class="container mx-auto">
    {{-- Componenetes anonimo --}}
    <x-alert2 color="red"/>
    </div>
    {{-- Componente dinamico --}}




</body>
</html>

