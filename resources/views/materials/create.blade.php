@extends('layouts.default')

@section('title', 'Cadastrar material')

@section('content')    

<!--Inicio-->
<div class="container-fluid">
    <div class="bg-light p-5 rounded">
        <div class="col-sm-8 mx-auto">               
        <h1> Novo Material</h1>
            <div class="row">
                <div class="col">
                    <form action="{{ route('materials.store') }}" method="post">
                    @csrf
                    @include('materials._partials.form')
                </form>
            </div>       
        </div>
    </div>
</div>
@endsection
