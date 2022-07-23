@extends('layouts.main')

@section('title', 'Listagem de materiais')

@section('content')

<div class="container">
    <h1>Materiais</h1>
</div> 

<div class="container-fluid">      
    <div class="row">   
        <!--Div da barra de pesquisa-->     
        <div class="col-sm-8 ">                          
            <form action="{{ route('materials.index') }}" method="get">
                <input class="form-control me-2" type="search" name ="search" placeholder="Pesquisar" aria-label="pesquisar">
                 <!--<input type="text" name ="search" placeholder="Pesquisar"> -->
                    <button class="btn btn-primary" type="submit">Pesquisar</button>                     
                </form>
        </div>
         <!--Botao para novo cadastro-->          
        <div class="col-sm-4">          
            <a class="btn btn-primary" href="{{ route('materials.create') }}" role="button">Novo</a>          
        </div>
    </div>            
</div>

<div class="container-fluid">
<!--Inicio da Tabela-->
    <div class="table-responsive">
        <table class="table table-striped">
        <caption>Materiais</caption>
        
        <thead class="table-dark">
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
                        <td> {{ $material->description }} </td> 
                        <td> {{ $material->numberassets }} </td> 
                        <td>{{ $material->qty }} </td>
                        <td> <a href="{{ route('materials.edit', $material->id) }}">Editar></a> </td>
                        <td> <a href="{{ route('materials.show', $material->id) }}">Detalhes></a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    <!--Fim da tabela-->
</div>
    <!--Fim da tabela-->
        <!--Parte de paginação de HTML-->
        <div>
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>


</div>   



@endsection