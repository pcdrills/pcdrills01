@extends('layouts.blogmain')
@section('blogcontent')
             
      <article class="entry">
        @if ($errors->any())
            <div>
              <ul>
                @foreach ($errors->all() as $error)
                <li class="alert-warning">{{ $error }}</li>                    
                @endforeach
              </ul>
            </div>
        @endif
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
  
@endsection