<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function show_post(Post $post){
        $post['post_desc'] = Str::markdown($post->post_desc);
        return view('post',['post'=>$post]);
    }
    public function show_create_post(){
        return view('create_post');
    }

    public function storeNewPost(Request $request) {
        $postViene = $request->validate([
            'post_title' => ['required',"max:255","min:2"],
            'post_desc' => ['required',"max:255","min:2"]

        ]);
        $postViene['post_title'] = strip_tags($postViene['post_title']);
        $postViene['post_desc'] = strip_tags($postViene['post_desc']);
        $postViene['user_id'] = auth()->user()->id;

        $thisPost = Post::create($postViene);
        return redirect("/post/{$thisPost->id}");
    }
}
