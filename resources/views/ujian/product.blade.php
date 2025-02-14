<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    @foreach ($products as $product )
        <p>ID : {{$product -> id}}</p>
        <p>Code : {{ $product -> code}}</p>
        <p>Nama : {{ $product -> name}}</p>
        <p>Description : {{ $product -> description}}</p>
        <p>Quantity : {{ $product -> quantity}}</p>
        <p>Price : {{ $product -> price}}</p>
    @endforeach
</body>
</html>