@extends('layouts.master')


 
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>

@section('subheader')
 
<header>
    

    <!--intro-->
    <div class="hero-text ">


      <h1 class="green">CURE</h1>
      <h1 class="green2"> TICKET</h1>
      <p class="inner-text2">Safe.Accurate.Accessible</p>
      <p class="inner-text">Write down some content here .. Write down<br> some content here .. Write down some content
        here .. </p>
      <!-- <a href="#" class="basic-btn">Get Started</a> -->






    </div>
    <!--end of intro-->




  </header>
  <!--start of second section-->
  <section id="feature1">
    <div class="feature1-text">
      <p class="feature">Features</p>
      <span class="green">Cure</span><span class="green2">scripe</span>
      <span class="feature">For Doctors</span>
      <p class="inner-text" style="width:816px;">Write down some content here .. Write down some content here .. Write
        down some content here 
         </p>
    </div>
  </section>
  <!--end of second section-->

   <!--start of third section-->
   <section id="feature2">
    <div class="feature2-text">
      <p class="feature">Features</p>
      <span class="green">Cure</span><span class="green2">scripe</span>
      <span class="feature">For pharmacies</span>
      <p class="inner-text" style="width:816px;">Write down some content here .. Write down some content here .. Write
        down some content here 
         </p>
    </div>
  </section>
  <!--end of third section-->


  <!--start of fourth section-->
  <section id="feature3">
    <div class="feature3-text">
      <p class="feature">Features</p>
      <span class="green">Cure ticket</span>
      <span class="feature">For Doctors</span>
      <p class="inner-text mb-5" style="width:816px;">Write down some content here .. Write down some content here .. Write
        down some content here 
         </p>
         <a href="#" ><img src="resources/imgs/Buttons-05.png"/></a><a href="#" class="ml-2 "><img src="resources/imgs/Buttons-03.png"/></a>
    </div>
  </section>
  <!--end of fourth section-->


  <!-- start of about section-->
  <!-- <section id="about">
    <div class="about-text">
      <h2>About</h2>
      <img src="resources/imgs/about-logo.png" class="mb-5"/>
      <p class="about-content">Write down some content here .. Write down some content here .. Write down some content here .. Write down some content here .. Write down some content here .. Write down some content here .. Write down some content here .. Write down some content here .. Write down some content here .. Write down some content here .. Write down some content here .. Write down some content here .. Write down some content here .. </p>
    </div>
  </section> -->
  <!--end of about section -->
@endsection
  @section('content')
  <!--start of form-->
  <section class="contact" id="contact">
    <h3 class="text-center mb-5">Contact us</h3>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
            <div class="group"> <input  class="mobile" type="text" required> <span class="highlight"></span> <span class="bar"></span> <label>Mobile number</label> </div>

        </div>
        <div class="col-sm-6">
            <div class="group "> <input class="name" type="text" required> <span class="highlight"></span> <span
              class="bar"></span> <label>Your name</label> </div>
        </div>
        
      </div>
      <div class="group"> <input  class="subject" type="text" required> <span class="highlight"></span> <span class="bar"></span> <label>Subject </label> </div>
      <div class="group"> <textarea rows="4" required=""></textarea> <span class="highlight"></span> <span class="bar"></span> <label>Type your massage here</label> </div>
    </div>

      
      <a href="#" class="btn-form my-5 ">SUBMIT</a>
  </section>
  <!--end of form-->
  @endsection
