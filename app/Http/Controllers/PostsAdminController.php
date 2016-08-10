<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

class PostsAdminController extends Controller
{

	private $post;

	public function __construct(Post $post) //injecao de dependencia
	{
		$this->post = $post;
	}

    public function index()
    {
    	//$posts = $this->post->all();
    	$posts = $this->post->paginate(6);
    	return view('admin.posts.index', ['posts' => $posts]);
    }


    public function create()
    {
    	return view('admin.posts.create');
    }

    public function store(PostRequest $request)//Request $request
    {
    	//dd($request->all()); //fornece um dump e mata a aplicacao
    	$this->post->create($request->all());
    	return redirect()->route('admin.posts.index');
    }

    public function edit($id)
    {
    	$post = $this->post->find($id);
    	return view('admin.posts.edit', ['post' => $post]);
    }


    public function update($id, PostRequest $request)
    {
    	$this->post->find($id)->update($request->all());
    	return redirect()->route('admin.posts.index');
    }


    public function destroy($id)
    {
    	$this->post->find($id)->delete();
    	return redirect()->route('admin.posts.index');
    }
}
