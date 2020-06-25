<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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
                return view('profile.post', compact('post','user'));
            break;
            case "pint":
                $posts_id = User::find($id)->pint->pluck('post_id');
                $pint = Post::whereIn('id',$posts_id)->latest()->get()->toArray();
                return view('profile.show', compact('pint'));
            break;
            case "follow":
                $user_id = User::find($id)->follow->pluck('user_follow_id');
                $posts = Post::whereIn('author_id',$user_id)->latest()->get()->toArray();
                return view('profile.show', compact('posts'));
            break;
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
