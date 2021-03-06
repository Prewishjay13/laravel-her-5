<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home(){
        $title = 'This is the homepage';
        return view('pages.home', compact('title'));      //eerste manier
    }

    public function about(){
        $title = 'This is the About page';
        return view('pages.about')-> with('title', $title);
    }

    public function Create_post(){
        $title = 'This is the create post page';
        return view('pages.create_post')-> with('title', $title);
    }
}
