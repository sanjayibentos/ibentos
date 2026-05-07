<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
</head>
<body>

<h1>Product Details</h1>

<p><b>Name:</b> {{ $product->name }}</p>
<p><b>Price:</b> {{ $product->price }}</p>

<a href="/products">Back</a>

</body>
</html>