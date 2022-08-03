@extends('layouts.main')

@section('title', 'Listagem de materiais')

@section('content')

<div class="container mt-3">
    <div class="row">                
        <div class="col-6">            
            </div class="card-body">           
                <h1>Novo Material</h1>          
                <form action="{{ route('materials.store') }}" method="post">
                    @csrf
                    @include('materials._partials.form')
                </form>             
            </div>
        </div>
    </div>
</div>

@endsection