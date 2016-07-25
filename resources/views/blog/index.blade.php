@extends('app')

@section('title')
    Blog Laravel
@endsection

@section('content')

    @foreach($posts as $post)
        <div class="postagens" style="margin-top: 60px;">
            <div class="row">
                <div class="col-sm-5" style="font-size: 20px;"><strong>{{ $post['title'] }}</strong></div>
                <div class="col-sm-2" style="background-color:lavender;"> em {{ date('d/m/Y, H:i:s', strtotime($post['created_at'])) }}</div>
            </div>
            <div class="row">
                <div class="col-sm-8">{{ str_limit($post['content'], $limit = 200, $end = '...') }}</div>
                <div class="col-sm-2"><a href="javascript:;">Continuar lendo</a></div>
            </div>
        </div>
    @endforeach

@endsection