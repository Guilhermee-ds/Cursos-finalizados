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


        @forelse ($fornecedores as $indice => $fornecedor)
            Interação atual: {{$loop -> iteration}};
            <br>
            Fornecedores: {{$fornecedor['nome']}};
            <br>
            Status: {{$fornecedor['status']}};
            <br>
            CNPJ: {{$fornecedor['cnpj'] ?? 'Dado não foi preencido'}};
            <br>
            Telefone: ({{$fornecedor['ddd'] ?? ''}}) {{$fornecedor['telefone'] ?? ''}};
            <br>
            @if ($loop->first)
                Primeira interação
            @endif
            @if ($loop->last)
                Ultima interação
                <br>
                Total de registros: {{$loop->count}}
            @endif
            <hr>
            @empty
                Não existe fornecedores cadastrados
        @endforelse
    @endisset




</body>
</html>
