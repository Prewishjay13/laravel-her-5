<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function user() {
        return view('\'pages.home\'');
    }

    public function admin() {
        return view('\'pages.home\'');
    }

    public function permissionDenied() {
        return view('\'pages.home\'');
    }
}
