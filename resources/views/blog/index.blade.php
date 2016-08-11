@extends('app')

@section('title')
    Blog Laravel
@endsection

@section('content')

    @foreach($posts as $post)
        <div class="postagens" style="margin-top: 40px;">
            <div class="row">
                <div class="col-sm-5" style="font-size: 20px;"><strong>{{ $post['title'] }}</strong></div>
                <div class="col-sm-2" style="background-color:lavender;"> em {{ date('d/m/Y, H:i', strtotime($post['created_at'])) }}</div>
            </div>
            <div class="row">
                <div class="col-sm-8">{{ str_limit($post['content'], $limit = 200, $end = '...') }}</div>
                <div class="col-sm-2"><a href="{{ action('BlogController@show', $post['id']) }}">Continuar lendo</a></div>                
            </div>
            <div class="row" style="padding-top: 10px;">
                <div class="col-sm-2">Comentários: {{ count($post->comments) }}</div>
                <div class="col-sm-6">
                    @foreach($post->tags as $tag)
                        {{ $tag->name." " }}
                    @endforeach                    
                </div>
            </div>
        </div>
    @endforeach
    {!! $posts->render() !!}

@endsection