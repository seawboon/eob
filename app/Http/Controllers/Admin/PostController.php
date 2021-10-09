<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;


class PostController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index','store']]);
         $this->middleware('permission:post-create', ['only' => ['create','store']]);
         $this->middleware('permission:post-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        App::setLocale('en');
        $data = Post::latest()->paginate(5);

        return view('admin.posts.index',compact('data'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StorePostRequest $request)
    {
        /*$this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
        $input = $request->except(['_token']);*/

        Post::create($request->validated());

        return redirect()->route('posts.index')
            ->with('success','Post created successfully.');
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('admin.posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);


        return view('admin.posts.edit',compact('post'));
    }

    public function update(StorePostRequest $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);

        $post->update($request->validated());

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        Post::find($id)->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully.');
    }

}
