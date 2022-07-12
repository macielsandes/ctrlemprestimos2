@extends('layouts.main')

@section('title', 'Registrar material')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
        </div>
        <button class="btn btn-primary" type="submit">Registrar</button>
        <button class="btn btn-primary" type="submit">Devolução</button>   
    </div>   
</div>
@endsection