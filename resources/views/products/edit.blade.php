<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Product:</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>