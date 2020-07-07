<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    function viewUpload(){
        return view('post.upload');
    }
    function upload(Request $request){
        $post = new Post();
        $post->title = $request->title;
        $post->user_id = Auth::id();
        if ($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('image/post', 'public');
            $post->image = $path;
        }
        $post->save();
        return redirect()->route('home');
    }
}
