@extends('layout')

@section('content')
    <form method="POST" action="{{ route('games.store') }}">
        @csrf

        <label>
            Название: 
            <input name="title" />
        </label>

        <label>
            Описание:
            <textarea name="description"></textarea>
        </label>

        <input type="submit" value="Подтвердить">
    </form>
@endsection
