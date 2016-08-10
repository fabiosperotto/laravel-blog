@extends('app')

@section('title')
    Blog Admin
@endsection

@section('content')

        <div class="postagens" style="margin-top: 20px;">
            <div class="row">
                <div class="col-sm-5" style="font-size: 20px;"><strong>Editar Post:</strong>{{ $post->title }}</div>                
            </div>

        <div class="row">

            @if($errors->any())
                <ul class="alert">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {!! Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'put']) !!}

                @include('admin.posts._form')
                
            {!! Form::close() !!}

        </div>
           
        </div>

@endsection