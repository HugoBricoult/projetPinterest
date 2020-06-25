<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AccueilController extends Controller
{
    public function index(){
        $post = Post::get()->toArray();
        return view('accueil',compact('post'));
    }
}
