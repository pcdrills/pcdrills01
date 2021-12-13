@extends('layouts.app')
@section('content')
  <div class="pt-2 pb-2">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/blog">Blog</a></li>
          <li>{{$post->slug}}</li>
        </ol>
        <h2>Update Post</h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->
  </div>
    <section id="blog" class="blog">
        <div class="container">
  
          <div class="row">
  
            <div class="col-lg-8 entries">
             
                <article class="entry">
                  <div>
                      <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">
                          @csrf 
                          @method('PUT')
                          <div>
                              <span>Title:</span>
                              <input type="text" name="title" id="" value="{{$post->title}}" placeholder="Title...">
                          </div>
                          <div class="pb-2 pt-2">
                              <textarea name="description" id="" cols="60" rows="6" value="" >{{$post->description}}</textarea>
                          </div>
                          <div class="pb-2">
                                <span>Select a file</span>
                                <input type="file" name="image" id=""  value="{{$post->image}}">
                          </div>
                        
                            <div class="pb-2">
                                <button type="submit" class="btn btn-primary">Submit Post</button>
                            </div>                                             
                        </form>
                    </div> 
                  
                </article>   
  
            </div>
            <!-- End blog entries list -->
  
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