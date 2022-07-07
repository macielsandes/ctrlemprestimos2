@extends('layouts.main')

@section('title', 'Listagem dos usuários')

@section('content')

<div class="container-fluid">
    <h1>Listagem de usuários (<a href="{{ route('users.create') }}">+</a>)</h1>

       <div class="table-responsive">
        <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Id</th>      
                        <th scope="col">Usuário</th>
                        <th scope="col">E-mail</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ( $users as $user )                           
                    <tr> 
                        <td> {{ $user->id }}</td>               
                        <td> {{ $user->name }}</td>
                        <td> {{ $user->email }}</td>
                        <td> <a href="{{ route('users.edit', $user->id) }}">Editar></a> </td> 
                        <td> <a href="{{ route('users.show', $user->id) }}">Detalhes></a> </td>
                    </tr>
                    @endforeach    
                </tbody>
        </table>
    </div>   
</div>
@endsection