@extends('layouts.blogmain')
@section('blogcontent')

    <!--Check for session messages-->
    @if (session()->has('message'))
      <div class="center" style="background-color: lightblue; text:green">
        <p>{{session()->get('message')}}</p>
      </div>
    @endif
    <!--Check for session messages-->
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
            {{ substr($post->description ,0 , 150)}}
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
    
    <div class="blog-pagination p-2">
      <ul class="justify-content-center">
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </div>
    
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
    </div>
  
@endsection