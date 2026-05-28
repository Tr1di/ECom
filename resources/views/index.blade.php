@extends('layout')

@section('content')
    <h1>Hello, World!</h1>
    <p>{{ now() }}</p>

    <a href="{{ route('games.index') }}">Игры</a>

    @auth
        <a href="{{ route('profile.index') }}">{{ auth()->user()->email }}</a>
    @else
        <a href="/login">Login</a>
    @endauth
    
@endsection
