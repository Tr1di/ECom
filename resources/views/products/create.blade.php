@extends('layout')

@section('content')
    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <label>
            Название: 
            <input name="title" />
        </label>

        <label>
            Описание: 
            <input name="description" />
        </label>

        <label>
            Цена: 
            <input name="price" type="number" min="0"/>
        </label>

        <select name="game_id">
            @foreach ($games as $game)
                <option value="{{ $game->id }}">{{ $game->title }}</option>
            @endforeach
        </select>

        <input type="submit" value="Подтвердить">
    </form>
@endsection
