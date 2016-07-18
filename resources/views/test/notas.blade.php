@extends('app')

@section('title')
    Minhas anotações
@endsection

@section('content')

    <h1>Anotações</h1>

    <ul>
        @foreach($notas as $nota)
            <li>{{ $nota }}</li>
        @endforeach
    </ul>
@endsection