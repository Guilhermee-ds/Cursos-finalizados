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
        @for ($i = 0; isset($fornecedores[$i]); $i++)
            Fornecedores: {{$fornecedores [2]['nome']}}
            <br>
            Status: {{$fornecedores [$i]['status']}}
            <br>
            CNPJ: {{$fornecedores [$i]['cnpj'] ?? 'Dado não foi preencido'}}
            <br>
            Telefone: ({{$fornecedores[$i]['ddd'] ?? ''}}) {{$fornecedores[1]['telefone'] ?? ''}}
            <hr>
        @endfor
    @endisset




</body>
</html>
