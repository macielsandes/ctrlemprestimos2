@extends('layouts.app')

@section('title', 'Listagem de materiais')

@section('content')

<h1>listagem de materiais (<a href="{{ route('materials.create') }}">+</a>)</h1>

<form action="{{ route('materials.index') }}" method="get">
    <input type="text" name ="search" placeholder="Pesquisar">  
    <button>Pesquisar</button>
</form>

<ul>
    @foreach ( $materials as $material )
        <li>
            {{ $material->name }} - 
            {{ $material->email }}
                <a href="{{ route('material.edit', $material->id) }}">Editar></a>
                <a href="{{ route('material.show', $material->id) }}">Detalhes></a>
        </li>
    @endforeach
</ul>

@endsection