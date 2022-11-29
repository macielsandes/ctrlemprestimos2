@extends('layouts.default')

@section('title', 'Cadatrar usuário')

@section('content')

@include('includes.validations-form')

<div class="container-fluid">
    <div class="bg-light p-5 rounded">        
    <div class="col-sm-8 mx-auto">
        <h1>Novo usuário</h1>           
        <div class="row">                
            <div class="col-6">            
                </div class="card-body">                              
                    <form action="{{ route('users.store') }}" method="post">
                    @csrf
                    @include('users._partials.form')
                    </form>  
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
