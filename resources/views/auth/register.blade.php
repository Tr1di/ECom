@extends('layout')

@section('content')
    <h2>Register</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/register" method="POST">
        @csrf

        <label for="email">Email</label>
        <input id="email" type="email" name="email"/>

        <label for="name">Name</label>
        <input id="name" type="text" name="name"/>

        <label for="password">Password</label>
        <input id="password" type="password" name="password"/>

        <label for="password_confirmation">Confirm password</label>
        <input id="password_confirmation" type="password" name="password_confirmation"/>

        <input type="submit"/>
    </form>
@endsection
