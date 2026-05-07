<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<body>

<h1>Customer List</h1>

<!-- Create button -->
<a href="/customers/create">➕ Add New Customer</a><br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th> <!-- ✅ new column -->
    </tr>

    @foreach($customers as $customer)
    <tr>
        <td>{{ $customer->id }}</td>
        <td>{{ $customer->name }}</td>
        <td>{{ $customer->email }}</td>
        <td>{{ $customer->phone }}</td>

        <!-- ✅ Action buttons -->
        <td>
            <a href="/customers/edit/{{ $customer->id }}">Edit</a> |
            <a href="/customers/delete/{{ $customer->id }}" onclick="return confirm('Delete this record?')">Delete</a>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>