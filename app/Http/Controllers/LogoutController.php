<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;

class LogoutController extends Controller
{
    public function index(){
        Auth::logout();
        $post = Post::get()->toArray();
        return view('accueil',compact('post'));
    }
}
