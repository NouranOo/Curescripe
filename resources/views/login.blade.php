@extends('layouts.master')
@section('title')
  Log in
@endsection

    
 

   @section('content')
   <section class="login">
   <div class="container">
            <p class="feature">SIGN IN</p>
            <span class="side-text">Sign in as</span>
            <form method="post" action="{{route('postadminLogin')}}"  onsubmit="return passwordvalidation()" name="signup" >
      @csrf
           
                    
                    <select id="country" name="country">
                      @foreach($usertypes as $usertype)
                        <option value="{{$usertype->id}}">{{$usertype->description}}</option>
                        @endforeach
                     
                    </select>  
               
                <!-- <div class="group margin-adj"> <input  class="mobile" type="text" required> <span class="highlight"></span> <span class="bar"></span> <label>Mobile number</label> </div> -->
                <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Mobile number</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" required autofocus>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <!-- <div class="group"> <input  id="password-field" class="password" type="password"  name="password" value="" required>  <span class="highlight"></span> <span class="bar"></span><label>Password</label> <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> </div> -->
                <label class="container2">Stay signed in
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                      <a href="#" class="forgot">Forgot  Password ?</a>
                       <button class="g-btn" type="submit">Log in</button>

                      </form>

                      <a href="#" class="b-btn mt-3">Create account</a>
                    <div class="fancy-box"><p class="subtitle fancy"><span>Or log in using</span></p></div> 
                    <div class="social-btn">
                        <a href="#" class="first"><img src="resources/imgs/facebook.png" class="mr-4"/>Facebook</a>
                      <a href="#" class="second"><img src="resources/imgs/google.png" class="mr-4"/>Google</a>
                    </div>
                    <div class="conditions">
                        <span class="b-style">By using CureTicket you are agree to</span><span class="g-style">Privacy policy & Terms of use</span>

                    </div>
</div>
                    </section>
   @endsection





