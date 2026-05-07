<h2>Add Customer</h2>

<form method="POST" action="/customers/store">
     @csrf 

    <label>Name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Email:</label><br>
    <input type="text" name="email"><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone"><br><br>

    <button type="submit">Save</button>
</form>