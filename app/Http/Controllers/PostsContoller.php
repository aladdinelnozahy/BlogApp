<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
class PostsContoller extends Controller
{
    public function index(){
        // $post = Post::all();
        // dd($post);
        return view('blog.index')->with('posts',Post::orderBy('updated_at','DESC')->get());
    }
    public function create(){
        return view('blog.create');
    
    }
    /**
     * @param \Illuminate\Http\Request
     * @param \Illuminate\Http\Response
     */
    public function store (request $request){
        // dd($request);
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $newImageName=uniqid().'-'. $request->title.'-'.$request->image->extension();
        dd($newImageName);
    }
}

