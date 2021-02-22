<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /** 
     * Show index page
     * @return view della pagina 
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show blog page
     * @return view della pagina
     */
    public function blog(Post $post)
    {
        $posts = Post::all();
        //dd($posts);
        return view ('blog', compact('posts')); 
    }

    /** 
     * Show contacts page
     * @return view della pagina 
     */
    public function contacts()
    {
        return view('contacts');
    }  


    
}

