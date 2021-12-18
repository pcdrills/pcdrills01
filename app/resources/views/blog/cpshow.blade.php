@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">



<body>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/blog">Blog</a></li>
          <li>{{$post->slug}}</li>
        </ol>
        <h2>{{$post->title}}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" ">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{ asset( 'images/'. $post->image_path )}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="/blog/{{$post->slug}}">{{$post->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                   <li>By :</li>  
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">{{$post->user->name}}</a> </li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time >Created on: {{date('jS M Y', strtotime($post->updated_at))}}</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="">0 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                    {{$post->description}}
                </p>

                <p>
                  How ever, everyone is here for the weekly tutorial review. Today, our tutorial goes as follows;
                </p>

                <blockquote>
                  <p>
                    Adding An Automatic Table Of Content To A Word Document.
                  </p>
                </blockquote>

                <p>
                  With the new age of documentation, the quantity of things you have to type have drastically increased. 
                  Not only about the amount of people needing things to be typed, also by the quantity of content in one typed document.
                  Take as example:
                </p>

                <h3>A teacher who want's to type a textbook for his subject.
                  Such a textbook won't be less than a hundred pages. Maybe he'll need a workbook for the book in question.</h3>
                <p>
                  In a book, we have the various parts that take into consideration multiple pages in the document. For example the Table of Contents , which is our focus of the day. You can decide, type the whole document in word and put the table of contents after you finally assume through with the editing. But did you know the owner could bring some changes a few munites or hours later?? Maybe for you to remove a paragraph found on the first page. Or probably to insert a page break or a new chapter at a particular location.
                  Adding that, is not the problem, the issue is at the level of the table of contents you'll have to edit multibple pages just to make it match with the current edits. 
                  And maybe that edit won't even be the final one. Haha... That's the issue we are handling today,
                </p>

                <h3></h3>
                <p>
                  A method in which you simple have to click a button to check for any updates in the values in your table of content and update them accordingly within seconds.
                  With this, you literally take the whole stress off you hands and eyes, having to screen, scroll and edit through.
                </p>
                <p>
                  Doing this is very simple to those who have been doing it and seem complicated to those who are new to it. And with the explanation we give here, it won't only help you to generate the table of contents, there are other things you can generate such as List of Tables, List of Figures, and others. 
                  What you need to do is to understand the concept behind it.
                </p>
                <p>
                  Without making the theory too long, let's get practical about it. Follow up through the video and hopefully you'll get the idea. For any questions, contact us throught any of the links you find on this site. NB: Most forms aren't yet implemented, please use the other methods for now.
                </p>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/ejj0-I0Vi5k" 
                  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Typing</a></li>
                </ul>
              </div>

            </article><!-- End blog entry -->

            <div class="blog-author d-flex align-items-center">
              <img src="assets/img/logo.png" class="rounded-circle float-left" alt="">
              <div>
                <h4>PC Drills</h4>
                <div class="social-links">
                  <a href="https://twitters.com/pc_drills"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/pcdrillsofficial"><i class="bi bi-facebook"></i></a>
                  <a href="https://t.me/pcdrills"><i class="bi bi-telegram"></i></a>
                </div>
                <p>
                  Where you find help on how to handle your PC related issues.
                </p>
              </div>
            </div><!-- End blog author bio -->

            <div class="blog-comments">

              <h4 class="comments-count">0 Comments</h4>

              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                      Test comment 1.
                    </p>
                  </div>
                </div>
              </div> 
              <!-- End comment #1 -->

              <div id="comment-2" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                      Test comment 2.
                    </p>
                  </div>
                </div>

              </div>
              <!-- End comment #2-->



              <div class="reply-form">
                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. Required fields are marked * </p>
                <form action="">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" placeholder="Your Name*">
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="text" class="form-control" placeholder="Your Email*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <input name="website" type="text" class="form-control" placeholder="Your Website">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>

                </form>

              </div>

            </div>
            <!-- End blog comments -->

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

              </div><!-- End sidebar recent posts-->

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
    </section><!-- End Blog Single Section -->

@endsection