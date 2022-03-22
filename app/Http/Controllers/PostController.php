<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {
        $allPosts = Post::all();

        return view("posts", [
            "allPosts"=>$allPosts
        ]);
    }

    public function show($id)
    {
        // $post = Post::where('id',$id)->first();
        $post = Post::find($id);
        return view('post',
        [
            'post'=>$post
        ]);
    }

    public static function convert($data)
    {
        return Carbon::parse($data)->format('d.m.Y');
    }

    public function create()
    {
        return view('create_post');
    }

    public function store()
    {
        $pureData = request()->validate([
            'title'=>'required',
            'body'=>'required',
            'author'=>'required',
            'email'=>'required'
        ]);

        $post = new Post();
        $post->create($pureData);

        return redirect('/')->with('created',"Post CREATED");
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('edit_post',['post'=>$post]);
    }

    public function update($id)
    {
        $post = Post::find($id);

        $pureData = request()->validate([
            'title'=>'required',
            'body'=>'required',
            'name'=>'required',
            'email'=>'required'
        ]);

        $post->title = request('title');
        $post->author = request('name');
        $post->body = request('body');
        $post->email = request('email');
        $post->update();

        return redirect('/post/'.$post->id)->with('updated',"Post UPDATED");
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/')->with('deleted',"Post DELETED");
    }
}
