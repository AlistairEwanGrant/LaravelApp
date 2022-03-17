<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('home')->with('posts', $user->posts);
    }

    public function edit()
    {

        // $user_id = auth()->user()->id;
        // $user = User::find($user_id);
        
        return view("home.editBio");

        // $post = Post::find($id);
        
        // if(auth()->user()->id !==$post->user_id){
        //     return redirect("/posts")->with('error', 'Unauthorizsed Page');
        // }
        // return view("posts.edit")->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'title' => 'required',
        //     'body' => 'required'
        // ]);

        // if($request->hasFile('cover_image')){
        //     $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();

        //     $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        //     $extension = $request->file('cover_image')->getClientOriginalExtension();

        //     $fileNameToStore = $filename.'_'.time().'.'.$extension;

        //     $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        // }


        // $post= Post::find($id);
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // if($request->hasFile('cover_image')){
        //     $post->cover_image = $fileNameToStore;
        // }
        // $post->save();

        // return redirect('/posts')->with('success', 'Post Updated');
    }


    
}
