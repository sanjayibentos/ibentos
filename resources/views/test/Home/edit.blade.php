<h2>Edit Customer</h2>

<form method="POST" action="/customers/update/{{ $customer->id }}">
    @csrf

    <label>Name:</label><br>
    <input type="text" name="name" value="{{ $customer->name }}"><br><br>

    <label>Email:</label><br>
    <input type="text" name="email" value="{{ $customer->email }}"><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone" value="{{ $customer->phone }}"><br><br>

    <button type="submit">Update</button>
</form>