@extends('layouts.app')

@section('title', 'Novo Material')

@section('content')

<div>  
    <form action="{{ route('materials.store') }}" method="post">
        @csrf
        @include('materials._patials.form')
    </form>
</div>

@endsection