<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::orderBy('created_at', 'desc')->get();
    	return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }
    public function get_about()
    {
    	return view('posts.about');
    }

    public function show_post()
    {
        $posts = Post::orderBy('created_at', 'desc')->first();
    	return view('posts.post', compact('posts'));
    }

    public function show_contact()
    {
    	return view('posts.contact');
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    	]);
    	Post::create(request(['title', 'body']));

    	return redirect('/');

    }
}
