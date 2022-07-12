@extends('layouts.main')

@section('title', 'Listagem de materiais')

@section('content')

<div class="container-fluid">                         
    </div class="card-body">               
    <h3>Novo Material</h3>          
        <form action="{{ route('materials.store') }}" method="post">
            @csrf
            @include('materials._partials.form')
        </form>             
</div>


@endsection