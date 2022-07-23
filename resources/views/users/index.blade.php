@extends('layouts.main')

@section('title', 'Usuários')

@section('content')

<div class="container">
    <h1>Usuários</h1>
</div> 

<div class="container-fluid">      
        <div class="row">   
            <!--Div da barra de pesquisa-->     
            <div class="col-sm-8 text-center">                          
                <form action="{{ route('users.index') }}" method="get">
                    <input class="form-control me-2" type="search" name ="search" placeholder="Pesquisar" aria-label="pesquisar">
                     <!--<input type="text" name ="search" placeholder="Pesquisar"> -->
                        <button class="btn btn-primary" type="submit">Pesquisar</button>                     
                    </form>
            </div>
             <!--Botao para novo cadastro-->          
            <div class="col-sm-4">          
                <a class="btn btn-primary" href="{{ route('users.create') }}" role="button">Novo</a>          
            </div>
        </div>            
</div>
    
<div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                                    <th scope="col">Id</th>      
                                    <th scope="col">Usuário</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ( $users as $user )                           
                                <tr> 
                                    <td> {{ $user->id }}</td>               
                                    <td> {{ $user->name }}</td>
                                    <td> {{ $user->email }}</td>
                                    <td> <a href="{{ route('users.edit', $user->id) }}">Editar></a> </td> 
                                    <td> <a href="{{ route('users.show', $user->id) }}">Excluir</a> </td>
                                </tr>
                                @endforeach    
                            </tbody>
                    </table>
                </div>   
            </div>
            </div>
        </table>
</div>

@endsection