<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <a href="{{ route('products.create') }}">Criar novo produto</a>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }} | <a href="{{ route('products.edit', $product->id) }}">editar</a></li>
        @endforeach
    </ul>
</body>
</html>
