@extends('layout')

@section('content')
    @if($errors->any())
        <div style="padding: 12px; background-color: red; color: white;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('games.store') }}">
        @csrf

        <label>
            Название: 
            <input name="title" value="{{ request('title') }}"/>
        </label>

        <label>
            Описание:
            <textarea name="description" value="{{ request('description') }}"></textarea>
        </label>

        <input type="submit" value="Подтвердить">
    </form>
@endsection
