@extends('app')

@section('title')
    Blog Admin
@endsection

@section('content')

        <div class="postagens" style="margin-top: 20px;">
            <div class="row">
                <div class="col-sm-5" style="font-size: 20px;"><strong>Blog Admin</strong></div>                
            </div>

            <div class="row">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Ações</th>
                    </tr>

                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td></td>
                    </tr>
                    @endforeach
                </table>
                {!! $posts->render() !!}
            </div>
           
        </div>

@endsection