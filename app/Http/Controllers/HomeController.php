<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{

    public function index()
    {
        //dd(app()->getLocale());
        $posts = Post::all();
        return view('home', compact('posts'));
    }
}
