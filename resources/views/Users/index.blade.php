@extends('layouts.app')

@section('title', 'Listagem dos usuários')

@section('content')

<h1>listagem de usuario</h1>
(<a href="{{ route('users.create') }}">+</a>)

<ul>
    @foreach ( $users as $user )
        <li>
            {{ $user->name }} - 
            {{ $user->email }}
                <a href="{{ route('users.edit', $user->id) }}">Editar></a>
                <a href="{{ route('users.show', $user->id) }}">Detalhes></a>
        </li>
    @endforeach
</ul>

@endsection
