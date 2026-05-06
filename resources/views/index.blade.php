@extends('layout')

@section('content')
    <h1>Hello, World!</h1>
    <p>{{ now() }}</p>

    <a href="{{ route('products.create') }}">Товары</a>
@endsection
