<?php

namespace App\Http\Controllers\Painel;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    private $post;

    public function __construct(Post $post)
    {
        $this->middleware('auth');

        $this->post = $post;
    }

    public function index(){

        $posts = $this->post->all();

        return view('painel.post.index', ['posts' => $posts]);

    }

    public function update($id){

        $post = $this->post->find($id);

        return view('painel.post.update', ['post' => $post]);
    }



}
