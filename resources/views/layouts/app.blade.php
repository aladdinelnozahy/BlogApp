<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <script src="{{asset('js/app.js')}}"></script>
  <title>{{config('app.name', 'laravel')}}</title>
</head>
<body>
  {{-- start navbar --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img class="navlogo" src="imgs/bloglogo.png" alt="">
    <a class="navbar-brand" href="{{url('/')}}">Welcome to Bloger</a>
    <div class="container-fluid">
      
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/blog')}}">Blog</a>
            {{-- {{ route('site.home') }} --}}
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Register</a>
          </li>
        </ul>
      </div>
  </nav>

  {{-- end navbar  --}}

  {{-- start content  --}}
  <div>
      @yield('content')
  </div>
  {{-- end content --}}
  {{-- start footer  --}}
  <div>
      @include('layouts.footer')
  </div>
  {{-- end footer  --}}

  {{-- <script src="{{asset('js/app.js')}}"></script> --}}
</body>
</html>

