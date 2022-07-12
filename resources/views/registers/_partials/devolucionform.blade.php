@extends('layouts.main')

@section('title', 'Registrar material')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <select class="form-control">
                <option>Select padrão</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
        </div>
        <div class="row">
        <div class="col-4">
            <select class="form-control">
                <option>Select padrão</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
        </div>    
    </div>   
</div>
@endsection