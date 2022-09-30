<form class="w-50 mx-auto mt-4" action="{{ route('product.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Ingresa tu Nombre</label>
        <input type="text" id="name" class="form-control" name="customer_name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Ingresa tu Correo</label>
        <input type="email" id="email" class="form-control" name="customer_email">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Ingresa tu Telefono</label>
        <input type="number" id="phone" class="form-control" name="customer_mobile">
    </div>
    <button type="submit" class="btn btn-success">Comprar</button>
</form>
