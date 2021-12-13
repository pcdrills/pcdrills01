@extends('layouts.app')
@section('content')
  <div class="pt-2 pb-2">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/blog">Blog</a></li>
          <li>Posts</li>
        </ol>
        <h2>Blog Posts</h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->
  </div>

    <!--Check for session messages-->
    @if (session()->has('message'))
      <div class="center" style="background-color: lightblue; text:green">
        <p>{{session()->get('message')}}</p>
      </div>
    @endif
    <!--Check for session messages-->

    <section id="blog" class="blog">
        <div class="container">
  
          <div class="row">
  
            <div class="col-lg-8 entries">
             @if (Auth::check())
                <div class="pb-2">
                    <a class="btn btn-primary" href="/blog/create">Create Post</a>
                </div>
              @endif
  
              @foreach ($posts as $post)
                <article class="entry">
                  <div class="entry-img">
                    <img src="{{ asset( 'images/'. $post->image_path )}}" alt="" class="img-fluid">
                  </div>
    
                  <h2 class="entry-title">
                    <a href="/blog/{{$post->slug}}">{{$post->title}}</a>
                  </h2>
    
                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">{{$post->user->name}}</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time >Created on: {{date('jS M Y', strtotime($post->updated_at))}}</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="">0 Comments</a></li>
                    </ul>
                  </div>
    
                  <div class="entry-content">
                    <p>
                      {{ $post->description}}
                    </p>
                    <div class="read-more">
                      <a href="/blog/{{$post->slug}}">Read More</a>
                    </div>
                  </div>
                  <div style=" text-align:center; display:flex;" class="center">
                  @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)                        
                        
                        <span>
                          <a href="/blog/{{$post->slug}}/edit" class="btn btn-primary">Edit</a>
                        </span>
                        <span>
                          <form action="/blog/{{ $post->slug }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"> Delete </button>
                          </form>
                        </span>
                      
                  @endif
                </div>
                </article>
                
              @endforeach            
  
              
  
              <div class="blog-pagination">
                <ul class="justify-content-center">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                </ul>
              </div>
  
            </div><!-- End blog entries list -->
  
            <div class="col-lg-4">
  
              <div class="sidebar">
  
                <h3 class="sidebar-title">Search</h3>
                <div class="sidebar-item search-form">
                  <form action="">
                    <input type="text">
                    <button type="submit"><i class="bi bi-search"></i></button>
                  </form>
                </div><!-- End sidebar search formn-->
  
                <h3 class="sidebar-title">Categories</h3>
                <div class="sidebar-item categories">
                  <ul>
                    <li><a href="#">General <span>(25)</span></a></li>
                    <li><a href="#">Lifestyle <span>(12)</span></a></li>
                    <li><a href="#">Travel <span>(5)</span></a></li>
                    <li><a href="#">Design <span>(22)</span></a></li>
                    <li><a href="#">Creative <span>(8)</span></a></li>
                    <li><a href="#">Educaion <span>(14)</span></a></li>
                  </ul>
                </div><!-- End sidebar categories-->
  
                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-item recent-posts">
                  <div class="post-item clearfix">
                    <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                    <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                    <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                    <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                    <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                    <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
  
                </div>
                <!-- End sidebar recent posts-->
  
                <h3 class="sidebar-title">Tags</h3>
                <div class="sidebar-item tags">
                  <ul>
                    <li><a href="#">App</a></li>
                    <li><a href="#">IT</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Mac</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Office</a></li>
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Studio</a></li>
                    <li><a href="#">Smart</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul>
                </div><!-- End sidebar tags-->
  
              </div><!-- End sidebar -->
  
            </div><!-- End blog sidebar -->
  
          </div>
  
        </div>
    </section>
    <!-- End Blog Section -->
  
@endsection