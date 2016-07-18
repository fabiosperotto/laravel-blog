@extends('app')

@section('title')
    Blog Laravel
@endsection

@section('content')

    @foreach($posts as $post)
        <div class="postagens" style="margin-top: 40px;">
            <div class="row">
                <div class="col-sm-3" style="font-size: 25px;"><strong>{{ $post['titulo'] }}</strong></div>
                <div class="col-sm-2" style="background-color:lavender;"> em {{ $post['data'] }}</div>
            </div>
            <div class="row">
                <div class="col-sm-8">{{ $post['resumo'] }}</div>
                <div class="col-sm-2"><a href="javascript:;">Continuar lendo</a></div>
            </div>
        </div>
    @endforeach

@endsection