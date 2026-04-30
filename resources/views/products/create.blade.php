@extends('layout')

@section('content')

    <form action="{{ route('products.store') }}">
        @csrf

        <label>
            Название: 
            <input name="name" />
        </label>

        <label>
            Описание: 
            <input name="description" />
        </label>

        <input type="submit" value="Подтвердить">
    </form>

@endsection
