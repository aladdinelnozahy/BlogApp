@extends('layouts.app')

@section('content')
    <div class="p-4  text-center">
        <h2 class="display-4">
            Blog Posts
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
    <form action="/blog" method="POST" enctype="multipart/form-data" class="p-5 ">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput"> title</label>
            <input type="text" name="title" placeholder="Title" class="form-control">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">description</label>
            <textarea name="description" placeholder="Description" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="custom-file p-3 ">
            <input type="file" class="custom-file-input" id="validatedCustomFile" >
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            <button class="btn btn-primary btn-lg " type="submit">Submit Post</button>

          </div>

        </form>

    
{{-- {{$posts}} --}}
@endsection