@extends('layout')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td>{{ $game->id }}</td>
                    <td>{{ $game->title }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
