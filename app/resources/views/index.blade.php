@extends('layouts.app')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1  >Handle your Computer issues with ease!</h1>
          <h2   >A team of IT engineers, there to make sure your business runs without a hinge computer related.</h2>
          <div   >
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" >
          <img  src="{{ asset('img/hero-img.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container"  >
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center"   >
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

          <div class="col-lg-6 d-flex align-items-center" >
            <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
            
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container"  >

        <header class="section-header">
          <h2>Our Values</h2>
          <p>Our Values</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="box"   >
              <img src="{{ asset('img/values-1.png') }}" class="img-fluid" alt="">
              <h3>Our Core Value</h3>
              <p>We deliver IT services to you at your door steps. Order a maintenance service just as you order an item on an e-commerce site. As simple as that. All you have to do is get in touch. We deliver services through the country, at your Home, Office, School, Resturants, etc</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box"   >
              <img src="{{ asset('img/values-2.png') }}" class="img-fluid" alt="">
              <h3>Teamwork</h3>
              <p>We work hand in glove with other IT Technicians around the country. The closest to you can help you on site in case of need. Credits go to the <a href="facebook.com/groups/computerproblemshandler">Computer Problems Handler glove</a> Group</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box"   >
              <img src="{{ asset('img/values-3.png') }}" class="img-fluid" alt="">
              <h3>Background</h3>
              <p>PC Drills is a group of computer engineers, with various levels of competence, ready to deliver to your IT services, right at your door steps. You don't have to travel or move out just to get your computer repaired. You don't have to wait days because you devices aren't permitting you to work normally. At PC Drills, That's not more something you should worry about. You leave it to us.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container"  >

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container"  >

        <header class="section-header">
          <h2>Features</h2>
          <p>Some of our work qualities</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <img src="{{ asset('img/features.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6"   >
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Fast and Easy</h3>
                </div>
              </div>

              <div class="col-md-6"  >
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Reliable</h3>
                </div>
              </div>

              <div class="col-md-6"   >
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Responsive</h3>
                </div>
              </div>

              <div class="col-md-6"   >
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Quality Service</h3>
                </div>
              </div>

              <div class="col-md-6"  >
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Available</h3>
                </div>
              </div>

              <div class="col-md-6"   >
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Affordable </h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->


      </div>

    </section>
    <!-- End Features Section -->

   

    

    

    

    

@endsection