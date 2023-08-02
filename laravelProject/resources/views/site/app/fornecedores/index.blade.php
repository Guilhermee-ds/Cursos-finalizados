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
        Fornecedores: {{$fornecedores [2]['nome']}}
        <br>
        Status: {{$fornecedores [2]['status']}}
        <br>
        CNPJ: {{$fornecedores [2]['cnpj'] ?? 'Dado não foi preencido'}}
        <br>
        Telefone: ({{$fornecedores[2]['ddd'] ?? ''}}) {{$fornecedores[1]['telefone'] ?? ''}}
        @switch($fornecedores[2]['ddd'])
            @case('11')
                São Paulo - SP
            @break

            @case('32')
                Juiz de Fora - MG
            @break

            @case('85')
                Fortaleza - CE
            @break

            @default
                Estado não indentificado

        @endswitch

    @endisset

    <br>



</body>
</html>
