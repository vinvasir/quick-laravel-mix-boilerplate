<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
		public function index()
		{
				$posts = Post::all();
				return view('posts.index', compact('posts'));
		}

		public function new()
		{
				return view('posts.new');
		}

		public function store()
		{
				$post = new Post(request(['title', 'body']));
				$post->properties = "{}";
				$post->save();

				return redirect('/posts');
		}
}