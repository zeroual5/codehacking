<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(8);
        $postsPopular = Post::paginate(2);
        return view('home',['posts'=> $posts,'postsPopular' => $postsPopular]);
    }

//    public function show($slug)
    public function show($id)
    {
        $full = false;
        if(isset($_GET['fullvideo'])){
            $full = true;
        }
//        $post = Post::where('slug', '=', $slug)->first();
//        $post = Post::findBySlugOrFail($slug);
//        $post = Post::findBySlugOrFail($id);
        $post = Post::find($id);
        $postsPopular = Post::paginate(2);
        return view('post',compact('post','postsPopular', 'full'));
    }
}
