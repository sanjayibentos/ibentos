<!DOCTYPE html>
<html>
<head>
    <title>Products CRUD</title>
</head>
<body>

    <h1>All Products</h1>

    {{-- Add Product Form --}}
    <h2>Add Product</h2>

    <form action="{{ route('products.store') }}" method="POST">

        @csrf

        <input type="text"
               name="name"
               placeholder="Enter Product Name"
               required>

        <input type="text"
               name="price"
               placeholder="Enter Price"
               required>

        <button type="submit">
            Add Product
        </button>

    </form>

    <hr>

    {{-- Product List --}}
    @if($products->count() > 0)

        <ul>

            @foreach($products as $product)

                <li>

                    <b>{{ $product->name }}</b>
                    -
                    ₹{{ $product->price }}

                    <br><br>

                    {{-- Update Form --}}
                    <form action="{{ route('products.update', $product->id) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('PUT')

                        <input type="text"
                               name="name"
                               value="{{ $product->name }}"
                               required>

                        <input type="text"
                               name="price"
                               value="{{ $product->price }}"
                               required>

                        <button type="submit">
                            Update
                        </button>

                    </form>

                    {{-- Delete Form --}}
                    <form action="{{ route('products.destroy', $product->id) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            Delete
                        </button>

                    </form>

                    <hr>

                </li>

            @endforeach

        </ul>

    @else

        <p>No products found</p>

    @endif

</body>
</html>