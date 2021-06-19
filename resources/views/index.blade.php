@extends('layouts.app')

{{-- start content  --}}
@section('content')

  <div class="background-cover m-auto grid">
    <div class="d-flex p-2" >
      <div class="m-auto ">
        <h1>Welcome to blogger</h1>
      </div>
    </div>
  </div>
  <div class="section1 ">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <img src="{{asset('..\imgs/section1.jpg')}}" alt="" style="max-width:100%;">
        </div>
        <div class="col-sm-7">            
            <div class="card-body">
              <h5 class="card-title h2">Special title treatment</h5>
              <p class="card-text lead text-secondary">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center section2 p-3 mb-2 bg-dark text-light ">
    <h2>
      ...
    </h2>
    <span class="d-block">UX Design</span>
    <span class="d-block">Project Management </span>
    <span class="d-block">Digital Strategy</span>
    <span class="d-block">Frontend Development</span>
    <span class="d-block">Backend Development</span>
  </div>

  <div class="section3 text-center">
    <span class="text-uppercase"> 
      our blog
    </span>
    <h2 class="">
      recent posts
    </h2>
    <p class="m-auto w-75 text-secondary ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus cumque dolorem eligendi quis reiciendis dolorum ea velit dolore consequatur libero? Porro consequatur natus saepe quo fugit maxime odio obcaecati architecto!</p>
  </div>


@endsection
{{-- end content  --}}