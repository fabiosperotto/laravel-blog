<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
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
}
