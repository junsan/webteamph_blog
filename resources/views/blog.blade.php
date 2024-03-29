<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Blog - WebTeamPH</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

    

    <!-- Bootstrap core CSS -->
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/blog.css')}}" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="{{ URL::route('index') }}"><img src="{{ asset('images/weblogo.png') }}" /></a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="{{ URL::route('login') }}" style="margin-right: 10px;">Log in</a>  
        <a class="btn btn-sm btn-outline-secondary" href="{{ URL::route('register') }}">Register</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      @foreach ($categories as $category)
        <a class="p-2 link-secondary" href="#">{{ $category->category_name }}</a>
      @endforeach
    </nav>
  </div>
</div>

<main class="container">

  <div class="row mb-2">
    <div class="col-md-8">
      <h2 class="blog-post-title mt- mb-3">{{$blog->title}}</h2>
      <p class="blog-post-meta">{{ $blog->created_at }} by <a href="#">{{ $blog->author }}</a></p>
      <div class="mt-5">
        <img src="{{ asset('public/images/'.$blog->image) }}" class="img-fluid" />
      </div>
      <div class="mt-5 mb-5">
        <p>{!! html_entity_decode($blog->body) !!}</p>
      </div>
      <div class="mt-5 mb-5">
        <span>Source:</span> <a target="_blank" href="{{$blog->link}}">{{$blog->link}}</a>
      </div>
      <div class="mt-5 mb-5">
        <button type="button" class="btn btn-secondary">Sign in to comment</button>
      </div>
      <div class="form-floating">
        <span style="font-weight: bold; margin-bottom: 5px;">Add a comment</a>
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px;"></textarea>
      </div>
      <div class="mt-3 mb-5" style="float: right;">
        <button type="button" class="btn btn-secondary">Comment</button>
      </div>
      <br style="clear: both;" />
      <div class="mb-5">
          <div class="row">
            <div class="col-md-1">
              <img  class="u-image-circle img-fluid" src="{{ asset('public/images/person.png') }}" />
            </div>
            <div class="col-md-11">
              <span style="font-weight: bold;">Rabia Aslam</span> <span style="font-weight: lighter; font-size: small;">1 month ago</span>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora fugiat explicabo eos laboriosam quos magnam veniam.</p>
            </div>
          </div>
      </div>
      <div class="mb-5">
          <div class="row">
            <div class="col-md-1">
              <img  class="u-image-circle img-fluid" src="{{ asset('public/images/person.png') }}" />
            </div>
            <div class="col-md-11">
              <span style="font-weight: bold;">Rabia Aslam</span> <span style="font-weight: lighter; font-size: small;">1 month ago</span>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora fugiat explicabo eos laboriosam quos magnam veniam.</p>
            </div>
          </div>
      </div>
      <div class="mb-5">
          <div class="row">
            <div class="col-md-1">
              <img  class="u-image-circle img-fluid" src="{{ asset('public/images/person.png') }}" />
            </div>
            <div class="col-md-11">
              <span style="font-weight: bold;">Rabia Aslam</span> <span style="font-weight: lighter; font-size: small;">1 month ago</span>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora fugiat explicabo eos laboriosam quos magnam veniam.</p>
            </div>
          </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>


    
  </body>
</html>
