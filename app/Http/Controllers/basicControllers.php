<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basicControllers extends Controller
{

    public function home(){
        $title = 'This is the homepage';
        return view('pages.home', compact('title'));      //eerste manier
    }

    public function about(){
        $title = 'This is the About page';
        return view('pages.about')-> with('title', $title);
    }

    public function articles(){
        $data = array('title' => 'articles', 'articles' => ['one', 'two', 'three']);
        return view('pages.articles')->with($data);
    }
}
