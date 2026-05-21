@extends('layout')

@section('content')
    @if(session('success'))
        <div style="background-color: green">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Название</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td>{{ $game->id }}</td>
                    <td>{{ $game->title }}</td>
                    <td>
                        <a href="{{ route('games.show', $game) }}">Просмотр</a>
                        <a href="{{ route('games.edit', $game) }}">Редактирование</a>
                        <form method="POST" action="{{ route('games.destroy', $game) }}">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="Удалить">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
