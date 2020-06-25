<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LogoutController extends Controller
{
    public function index(){
        Auth::logout();
        return view('welcome');
    }
}
