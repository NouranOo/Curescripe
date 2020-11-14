@extends('layouts.master')
@section('title')
Sign Up 
@endsection
@section('content')


      <section class="sign-up ">
      <form method="post" action="{{route('sendsignup')}}"  onsubmit="return passwordvalidation()" name="signup" >
      @csrf
        <div class="container no-gutters">
                <p class="feature mb-4">CREATE ACCOUNT</p>
                <!--first row-->
               
            
                <div class="row">
                    <div class="col-sm-6">
                        <div class="group "> <input  class="mobile" type="text" name="mobile" required> <span class="highlight"></span> <span class="bar"></span> <label>Mobile number</label> </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="group "> <input class="name" type="text" name="name" required> <span class="highlight"></span> <span
                            class="bar"></span> <label>Your name</label> </div>
                    </div>
                </div>
                <!--first row-->
                 <!--second row-->
                 <div class="row">
                    <div class="col-sm-6">
                        <div class="group"> <input  id="password-field" class="password" type="password"  name="password" value="" required>  <span class="highlight"></span> <span class="bar"></span><label>Password</label>  </div>
                        <div>  <span class="invalid-feedback" role="alert" id="pass2error"></span> </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="group"> <input  id="password-field1" class="password" type="password"  name="password1" value="" required>  <span class="highlight"></span> <span class="bar"></span><label>Confirm Password</label>  </div>
                        <div>  <span class="invalid-feedback" role="alert" id="pass1error"></span></div>
                    </div>
                </div>
                <!--second row-->
                 <!--third row-->
                 <div class="row">
                    <div class="col-sm-6">
                        <div class="group"> <input  id="password-field2" class="message" type="email"  name="email" value="" required>  <span class="highlight"></span> <span class="bar"></span><label>Email address</label>  </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="group"> <input  id="password-field3" class="address" type="text"  name="address" value="" required>  <span class="highlight"></span> <span class="bar"></span><label>Physical address</label>   </div>

                    </div>
                </div>
                <!--third row-->
                 <!--fourth row-->
                 <div class="row">
                    <div class="col-sm-6">
                        <select id="country" name="gender">
                        @foreach($genders as $gender)
                            <option value="{{$gender->id}}">{{$gender->description}}</option>
                         
                          @endforeach
                        </select>  
                    </div>
                    <div class="col-sm-6">
                        <div class="group"> <input  id="password-field4" class="birth" type="date"  name="date" value="" required>  <span class="highlight"></span> <span class="bar"></span><label>Birth date</label>  </div>

                    </div>
                </div>
                <!--fourth row-->
                   
                <button class="b-btn" type="submit">Create account</button>
                    
                         
        </div>
        </form>

        <span class="b-style">Already have an account?</span><span class="g-style">Sign in istead</span>

<div class="fancy-box"><p class="subtitle fancy"><span>Or log in using</span></p></div> 
<div class="social-btn">
    <a href="#" class="first"><img src="resources/imgs/facebook.png" class="mr-4"/>Facebook</a>
  <a href="#" class="second"><img src="resources/imgs/google.png" class="mr-4"/>Google</a>
</div>
<div class="conditions">
    <span class="b-style">By using CureTicket you are agree to</span><span class="g-style">Privacy policy & Terms of use</span>

</div>
    
    </section>
  @endsection