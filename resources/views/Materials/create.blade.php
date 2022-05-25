@extends('layouts.app')

@section('title', 'Novo Material')

@section('content')

<h1>Novo Material</h1>

@include('includes.validations-form')

<form action="{{ route('materials.store') }}" method="post">
    @csrf
    @include('materials._patials.form')
</form>

@endsection