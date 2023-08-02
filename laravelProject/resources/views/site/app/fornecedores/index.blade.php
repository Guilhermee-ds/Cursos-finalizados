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
     //if(empty($variavel)) {} // retorna true se a variavel estiver vazia
       // echo "teste php";
    @endphp

    {{--@dd($fornecedores):--}}
    {{-- @unlesss executa se o retorno for falso --}}


    @isset($fornecedores)
        Fornecedores: {{$fornecedores [1]['nome']}}
        <br>
        Status: {{$fornecedores [1]['status']}}
        <br>
        CNPJ: {{$fornecedores [1]['cnpj'] ?? 'Dado não foi preencido'}}


        <!--$variavel testada não estiver definida  (isset)*!
            ou
            $variavel testada possuir o valor null
        -->
    @endisset

    <br>



</body>
</html>
