@extends('layouts.main')

@section('title', 'Registrar material')

@section('content')

<form>
    <div class="form-select form-select-lg mb-3">
        <h4>Selecione o material:</h4>
            <select class="form-floating" aria-label="Default select example">
                <option>Select padrão</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
    </div>           
    <div class="form-select form-select-lg mb-3">
        <h4>Selecione o usuario de usuário:</h4>
        <select class="form-floating"">
            <option>Select padrão</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
         </select>
    </div>             
    <div class="form-select form-select-lg mb-3">
        <h4>O que deseja registrar:</h4>
            <button type="button" class="btn btn-primary btn-sm">Empréstimo</button>
            <button type="button" class="btn btn-secondary btn-sm">Devolução</button>
    </div>    
    
</form>
@endsection