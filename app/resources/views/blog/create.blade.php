@extends('layouts.blogmain')
@section('blogcontent')
             
                <article class="entry">
                  <div>
                      <form action="/blog" method="POST" enctype="multipart/form-data">
                          @csrf 
                          <div>
                              <span>Title:</span>
                              <input type="text" name="title" id="" placeholder="Input Title...">
                          </div>
                          <div class="pb-2 pt-2">
                              <textarea name="description" id="" cols="60" rows="6" placeholder="Description..."></textarea>
                          </div>
                          <div class="pb-2">
                                <span>Select a file</span>
                                <input type="file" name="image" id="">
                          </div>
                        
                            <div class="pb-2">
                                <button type="submit" class="btn btn-primary">Submit Post</button>
                            </div>                                             
                        </form>
                    </div> 
                  
                </article>   
  
            
            <!-- End blog entries list -->
  
@endsection