<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

<h1>Add Product</h1>

<form method="POST" action="/products">
    @csrf

    <label>Name:</label>
    <input type="text" name="name"><br><br>

    <label>Price:</label>
    <input type="text" name="price"><br><br>

    <button type="submit">Save</button>
</form>

</body>
</html>