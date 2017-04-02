<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Index method is where the main page is shown, if the request is being returned from a certain category
     * then display the posts that are related only to that category alone
     * if not then display all of the posts from every category
     *
     */
    public function index()
    {
        if(request()->has('category')){
          $posts = \App\Post::where('category_id',request('category'))
            ->orderBy('created_at', 'desc')
            ->paginate(5)
            ->appends('category',request('category'));
        }else {
          $posts = \App\Post::orderBy('created_at', 'desc')->paginate(5);
        }

        return view('index')->with('posts',$posts);
    }

    public function about()
    {
        return view('about');
    }
}
