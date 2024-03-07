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
        <a class="link-secondary" href="{{ URL::route('index') }}"><img src="images/weblogo.png" /></a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
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
  <div class="row p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">{{ $mainBlog->title }}</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="{{ URL::route('blog.show', $mainBlog->id) }}" class="text-white fw-bold">Continue reading...</a></p>
    </div>
    <div class="col-md-6">
      <img src="public/images/{{ $mainBlog->image }}" class="img-fluid" />
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-450 position-relative">
        <div class="col-md-8 p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">{{ $subBlog1->category->category_name }}</strong>
          <h3 class="mb-0">{{ $subBlog1->title }}</h3>
          <div class="mb-1 text-muted">{{ $subBlog1->created_at }}</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="{{ URL::route('blog.show', $subBlog1->id) }}" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-md-4 d-none d-lg-block">
          <img src="public/images/{{ $subBlog1->image }}" class="img-fluid" />
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-350 position-relative">
        <div class="col-md-8 p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">{{ $subBlog2->category->category_name }}</strong>
          <h3 class="mb-0">{{ $subBlog2->title }}</h3>
          <div class="mb-1 text-muted">{{ $subBlog2->created_at }}</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="{{ URL::route('blog.show', $subBlog2->id) }}" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-md-4 d-none d-lg-block">
          <img src="public/images/{{ $subBlog2->image }}" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        More Blogs
      </h3>
      @foreach($moreBlogs as $moreblog)
      <article class="blog-post">
        <div class="row g-5">
          <div class="col-md-7">
            <a style="color: black; text-decoration: none;" href="{{ URL::route('blog.show', $moreblog->id) }}"><h2 class="blog-post-title">{{$moreblog->title}}</h2></a>
            <p class="blog-post-meta">{{ $moreblog->created_at }} by <a href="#">{{ $moreblog->author }}</a></p>

            <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
            <a href="{{ URL::route('blog.show', $moreblog->id) }}">Continue reading</a>  
          </div>
          <div class="col-md-5">
            <img src="images/{{ $moreblog->image }}" class="img-fluid" />
          </div>
        </div>
      </article>
      @endforeach

  



      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

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
