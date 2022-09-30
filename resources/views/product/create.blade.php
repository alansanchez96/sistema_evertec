@extends('layouts.layout')

@section('titulo', 'Shop ' . $product->product_name)

@section('content')

    <h1 class="text-center mt-4">Estás a punto de comprar <span class="fw-bold text-success text-capitalize">{{ $product->product_name }}</span></h1>
    <h3 class="text-center">Sigue las instrucciones</h3>

@endsection
