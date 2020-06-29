<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use App\Follow;
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
        $follow = Follow::where('user_follow_id',$id)->get();
        switch($section){
            case "posts":
                $post = User::find($id)->posts->toArray();
                return view('profile.post', compact('post','user','follow'))->with('id',$id)->with('section',$section);
            break;
            case "posts-create":
                $post = User::find($id)->posts->toArray();
                return view('posts.create', compact('post','user','follow'))->with('id',$id)->with('section',$section);
            break;
            case "pint":
                $posts_id = User::find($id)->pint->pluck('post_id');
                $pint = Post::whereIn('id',$posts_id)->latest()->get()->toArray();
                return view('profile.pint', compact('pint','user','follow'))->with('id',$id)->with('section',$section);
            break;
            case "follow":
                $user_id = User::find($id)->follow->pluck('user_follow_id');
                $posts = Post::whereIn('author_id',$user_id)->latest()->get()->toArray();
                return view('profile.follow', compact('posts','user','follow'))->with('id',$id)->with('section',$section);
            break;
        }
    }

    public function updateimg(Request $request){
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageName = $imagePath->getClientOriginalName();

            $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
            $path = 'storage/'.$path;
            $user = User::findOrFail($request['id']);
            $user->image_profile_link = $path;
            $user->save();
            return redirect('/profile/'.$request['id'].'/posts');
        }
    }

    public function updatecover(Request $request){
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageName = $imagePath->getClientOriginalName();

            $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
            $path = 'storage/'.$path;
            $user = User::findOrFail($request['id']);
            $user->image_cover_link = $path;
            $user->save();
            return redirect('/profile/'.$request['id'].'/posts');
        }
    }
}
