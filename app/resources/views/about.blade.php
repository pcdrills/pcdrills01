@extends('layouts.app')

@section('content')
    <div  class="container">
        
        <section id="about" class="about">

            <div class="container">
              <div class="row gx-0">
      
                <div class="col-lg-6 d-flex flex-column justify-content-center" >
                  <div class="content">
                    <h3>Who We Are</h3>
                    <h2>Started as an initiative of the Computer Problems Handler group, expanding it's service to those in need.</h2>
                    <p>
                      Handle your computer issues as fast and as simple as never before. All you have to do is forward your inquiry to us and we help you resolve it by using all the necessary information you provide. We help you with your help.
                    </p>
                    <div class="text-center text-lg-start">
                      <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Read More</span>
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-6 d-flex align-items-center"  >
                  <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
                </div>
      
              </div>
            </div>
          
          <!-- End About Section -->
    </div>
@endsection