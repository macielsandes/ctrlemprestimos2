@extends('layouts.app')

@section('title', 'Listagem de materiais')

@section('content')

<div class="container">
<h1>listagem de materiais (<a href="{{ route('materials.create') }}">+</a>)</h1>

<form action="{{ route('materials.index') }}" method="get">
    <input type="text" name ="search" placeholder="Pesquisar">  
    <button>Pesquisar</button>
</form>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>      
            <th scope="col">Descrição</th>
            <th scope="col">Numero de Serie</th>
            <th scope="col">Quantidade</th>
        </tr>
    </thead>
    <tbody> 
        @foreach ( $materials as $material )
        <tr> 
            <td> {{ $material->id }} </td> 
            <td> {{ $material->descricao }} </td> 
            <td>{{ $material->serie }} </td>
            <td>{{ $material->quantidade }} </td>
            <td> <a href="{{ route('materials.edit', $material->id) }}">Editar></a> </td>
            <td> <a href="{{ route('materials.show', $material->id) }}">Detalhes></a> </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection