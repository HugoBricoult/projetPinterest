<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;

use App\Auth;

use Illuminate\Http\Request;

class EditController extends Controller
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
    public function store($id,Request $request)
    {
        $request->validate([
            'image_profile_link' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_cover_link' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'pseudo'=>'required|string',
            'email'=>'required|string',
        ]);
        
        $user = User::findOrFail($id);

        $user->pseudo = $request->input('pseudo');

        $user->email = $request->input('email');

        $imagePathAvatar = $request->file('image_profile_link');
        $imageNameAvatar = $imagePathAvatar->getClientOriginalName();
        $path_profile = $request->file('image_profile_link')->storeAs('uploads', $imageNameAvatar, 'public');
        $path_profile = 'storage/'.$path_profile;
        $user->image_profile_link = $path_profile;

        $imagePathCover = $request->file('image_cover_link');
        $imageNameCover = $imagePathCover->getClientOriginalName();
        $path_cover = $request->file('image_cover_link')->storeAs('uploads', $imageNameCover, 'public');
        $path_cover = 'storage/'.$path_cover;
        $user->image_cover_link = $path_cover;

        $user->save();

        return redirect('/profile/'.$id.'/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     dump($id);
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
        
    }
}
