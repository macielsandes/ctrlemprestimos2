@extends('layouts.default')

@section('title', 'Listagem de materiais')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card-body">
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
        </div>
    </div>
@endsection
