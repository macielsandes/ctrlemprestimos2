@extends('layouts.main')

@section('title', 'Novo Usuário')

@section('content')

@include('includes.validations-form')

<div class="container">
    <div class="row">                
        <div class="col-6">
            <div class="card">
                </div class="card-body"> 
                    <h4>Novo Usuário</h4>
                
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
