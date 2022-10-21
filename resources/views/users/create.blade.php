@extends('layouts.default')

@section('title', 'Novo Usuário')

@section('content')

@include('includes.validations-form')

<div class="container mt-3">
    <div class="row">                
        <div class="col-6">            
            </div class="card-body"> 
                <h1>Novo usuário</h1>                
                    <form action="{{ route('users.store') }}" method="post">
                        @csrf
                        @include('users._partials.form')
                    </form>  
            </div>
        </div>
    </div>
</div>
@endsection
