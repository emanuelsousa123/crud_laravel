<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="product">Product:</label>
        <input type="text" id="product" name="name" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>