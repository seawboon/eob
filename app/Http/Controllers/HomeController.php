<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Post;

class HomeController extends Controller
{

    public function index()
    {
        //dd(app()->getLocale());
        $posts = Post::translated()->get();
        return view('home', compact('posts'));
    }

    public function postIndex()
    {
        $posts = Post::get();
        return response()->json($posts);
    }

    public function showPost(Post $slug) {
      return $slug->content;
    }
}
