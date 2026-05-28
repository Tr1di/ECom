@extends('layout')

@section('content')
    <h2>{{ auth()->user()->email }}</h2>

    <form action="/logout" method="POST">
        @csrf
        <input type="submit" value="Logout"/>
    </form>
@endsection
