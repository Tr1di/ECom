@extends('layout')

@section('content')
    <form method="POST" action="{{ route('games.store') }}">
        @csrf

        <label>
            Название: 
            <input name="name" />
        </label>

        <input type="submit" value="Подтвердить">
    </form>
@endsection
