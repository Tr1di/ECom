@extends('layout')

@section('content')
    @can('create', App\Models\Product::class)
        <a href="{{ route('products.create') }}"></a>
    @endcan

    <oi>
    @for ($i = 0; $i < 10; $i++)
        <li>{{ $i }}</li>
    @endfor
    </oi>
@endsection
