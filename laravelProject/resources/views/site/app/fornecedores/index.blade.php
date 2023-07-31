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
        echo "teste php";
    @endphp


    @if (count($fornecedores)> 0 && count($fornecedores) < 10)
        <h2>Existem Fornecedores</h2>

    @elseif (count($fornecedores) >= 10)
    <h2>existem varios fornecedores cadastrados</h2>

    @else
    <h2>ainda nao existe fornecedores</h2>
    @endif

</body>
</html>
