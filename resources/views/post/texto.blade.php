@extends('app')

@section('title')
    {{ $post['title'] }}
@endsection

@section('content')

    <div class="post" style="margin-top: 40px;">
        <div class="row">
            <div class="col-sm-12" style="font-size: 22px;"><strong>{{ $post['title'] }}</strong></div>            
        </div>
        <div class="row">
            <div class="col-sm-12" style="background-color:lavender;"> em {{ date('d/m/Y, H:i', strtotime($post['created_at'])) }}</div>
        </div>
        <div class="row">
            <div class="col-sm-12" style="margin: 15px 5px 30px;">{!! nl2br(e($post['content'])) !!}</div>                            
        </div>           
        <div class="col-sm-12" style="font-size: 20px;padding-bottom:10px;"><strong>Comentários</strong></div>
        @if(count($post->comments) > 0)
            @foreach($post->comments as $comment)
                <div class="row" style="padding-top: 6px;">
                    <div class="col-sm-3" ><strong>Nome:</strong> {{ $comment->name }}</div>                    
                </div>
                 <div class="row" style="padding-top: 10px;">                    
                    <div class="col-sm-2" ><strong>Comentário:</strong></div>
                    <div class="col-sm-10" >{{ $comment->comment }}</div>
                </div>
            @endforeach 
        @else
            <div class="col-sm-12" style="font-size: 15px;padding-bottom:10px;">Não existem comentários para este post</div>
        @endif                              
         <div class="row">
            <div class="col-sm-5" style="margin-top: 20px;"><a href="{{ action('BlogController@index') }}">Voltar</a></div>
        </div>
    </div>

@endsection