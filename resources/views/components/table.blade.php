<div class="panel panel-default mt-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_price }}</td>
                    <td><a href="{{ route('product.show', $product->id) }}">
                            <button class="btn btn-success">Comprar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tbody>
    </table>
</div>
