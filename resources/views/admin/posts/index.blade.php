@extends('app')

@section('title')
    Blog Admin
@endsection

@section('content')

        <div class="postagens" style="margin-top: 20px;">
            <div class="row" style="margin-bottom: 10px;">
                <div class="col-sm-5" style="font-size: 20px;"><strong>Blog Admin</strong></div>                
            </div>

            <div class="row">
                <a href="{{ route('admin.posts.create') }}" class="btn btn-success">New Post</a>
                <br /><br />
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
                        <td><a href="{{ route('admin.posts.edit', ['id' => $post->id]) }}" class="btn btn-default">Edit</a>  <a href="{{ route('admin.posts.destroy', ['id' => $post->id]) }}" class="btn btn-danger">Del</a></td>
                    </tr>
                    @endforeach
                </table>
                {!! $posts->render() !!}
            </div>
           
        </div>

@endsection