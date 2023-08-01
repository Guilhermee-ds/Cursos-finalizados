<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to page Fornecedores</h1>

    @php
       // echo "teste php";
    @endphp

    {{--@dd($fornecedores):--}}
    {{-- @unlesss executa se o retorno for falso --}}

    Fornecedores: {{$fornecedores [0]['nome']}}
    <br>
    Status: {{$fornecedores [0]['status']}}
    <br>
    @if ($fornecedores[0]['status'] == 'N')
        Fornecedor inativo
    @endif
    <br>
    @unless (($fornecedores[0]['status'] == 'S')) <!-- Se o retorno for falso -->
        Fornecedor inativo - Metodo Unlesss
    @endunless
    <br>



</body>
</html>
