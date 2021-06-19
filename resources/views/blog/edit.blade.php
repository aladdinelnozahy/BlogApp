@extends('layouts.app')

@section('content')
    <div class="p-4  text-center">
        <h2 class="display-4">
            Update Posts
        </h2 >
        <a href="blog/create" role="button" class="btn btn-success btn-lg">Add Post</a>
    </div>
    @if ($errors->any())
    <div class="m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-primary p-3">
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>        
    @endif
    <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data" class="p-5 ">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="formGroupExampleInput"> title</label>
            <input type="text" name="title" value="{{$post->title}}" class="text-dark form-control">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">description</label>
            <textarea name="description" class="text-dark form-control" id="" cols="30" rows="10">{{$post->description}}</textarea>
        </div>
        <div class="custom-file p-3 ">
            <button class="btn btn-primary btn-lg " type="submit">Submit Post</button>
        </div>

        </form>

    
{{-- {{$posts}} --}}
@endsection