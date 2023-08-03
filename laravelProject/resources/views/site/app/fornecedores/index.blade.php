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

        @php $i = 0 @endphp
        @while(isset($fornecedores[$i]))
            Fornecedores: {{$fornecedores [$i]['nome']}};
            <br>
            Status: {{$fornecedores [$i]['status']}};
            <br>
            CNPJ: {{$fornecedores [$i]['cnpj'] ?? 'Dado não foi preencido'}};
            <br>
            Telefone: ({{$fornecedores[$i]['ddd'] ?? ''}}) {{$fornecedores[1]['telefone'] ?? ''}};
            <hr>
            @php $i++ @endphp
        @endwhile
    @endisset




</body>
</html>
