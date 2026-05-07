<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h1>Edit Product</h1>

<form method="POST" action="/products/{{ $product->id }}">
    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ $product->name }}"><br><br>

    <label>Price:</label>
    <input type="text" name="price" value="{{ $product->price }}"><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>