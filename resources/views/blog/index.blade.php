@extends('layouts.app')

@section('content')
    <div class="p-4 border border-secondary text-center">
        <h2 class="display-4">
            Blog Posts
        </h2 >
        <a href="blog/create" role="button" class="btn btn-success btn-lg">Add Post</a>
    </div>

    @if (session()->has('message'))
        <div class="text-primary p-3">
            <p>{{session()->get('message')}}</p>
        </div>
        
    @endif
    @foreach ($posts as $post)
    <div class="card mb-3">
        <div class="row">
            <div class="col-md-4">
                <img class="card-img-top" src="{{asset('..\imgs/section1.jpg')}}" style="width:100%" alt="Card image cap">

            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p class="card-text">{{$post->description}}</p>
                    <p class="card-text"><small class="text-muted">Post by {{$post->user->name}} , created on {{date('jS M Y', ($post->updated_at))}}</small></p>
                    {{-- @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id) --}}
                        <span>
                            <a href="/blog/{{$post->slug}}/edit" class=" btn btn-primary">Edit</a>
                        </span>
                    {{-- @endif --}}

                </div>

            </div>
            
        </div>
    </div>

    @endforeach

    
{{-- {{$posts}} --}}
@endsection