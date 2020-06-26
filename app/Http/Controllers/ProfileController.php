<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use Illuminate\Http\Request;


class ProfileController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id,$section)
    {
        $user = User::find($id);
        switch($section){
            case "posts":
                $post = User::find($id)->posts->toArray();
                return view('profile.post', compact('post','user'))->with('id',$id);
            break;
            case "posts-create":
                $post = User::find($id)->posts->toArray();
                return view('posts.create', compact('post','user'))->with('id',$id);
            break;
            case "pint":
                $posts_id = User::find($id)->pint->pluck('post_id');
                $pint = Post::whereIn('id',$posts_id)->latest()->get()->toArray();
                return view('profile.pint', compact('pint','user'))->with('id',$id);
            break;
            case "follow":
                $user_id = User::find($id)->follow->pluck('user_follow_id');
                $posts = Post::whereIn('author_id',$user_id)->latest()->get()->toArray();
                return view('profile.follow', compact('posts','user'))->with('id',$id);
            break;
            case "edit":
                return view('profile.edit',compact('user'))->with('id',$id);
            break;
        }
    }
}
