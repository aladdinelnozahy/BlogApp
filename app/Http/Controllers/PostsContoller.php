<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
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
        // dd($newImageName);
        $request->image->move(public_path('images'),$newImageName);

        
        // dd($slug);
        
        Post::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'slug'=>SlugService::createSlug(Post::class, 'slug', $request->title),
            'image_path'=>$newImageName,
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/blog')->with('message', 'your post has been added');
    }

    /**
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function edit ($slug){
        return view ('blog.edit')->with('post', Post::where('slug', $slug)->first());

   
    }


}

