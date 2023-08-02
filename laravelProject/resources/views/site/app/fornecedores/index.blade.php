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
     if(isset($variavel)) {} // retorna true se a variavel estiver definida
       // echo "teste php";
    @endphp

    {{--@dd($fornecedores):--}}
    {{-- @unlesss executa se o retorno for falso --}}


    @isset($fornecedores)
        Fornecedores: {{$fornecedores [0]['nome']}}
        <br>
        Status: {{$fornecedores [0]['status']}}
        <br>
        @isset($fornecedores [0]['cnpj'])
        CNPJ: {{$fornecedores [0]['cnpj']}}
        @endisset

    @endisset

    <br>



</body>
</html>
