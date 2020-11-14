@extends('layouts.master')
@section('title')
New Password
@endsection
@section('content')
<section class="details">
    <div class="container">
    <form method="POST" action="{{ route('password.update') }}">
      @csrf
      <input type="hidden" name="token" value="{{ $token }}">
            <p class="feature">CREATE NEW PASSWORD</p>
            <P >Type a password that can easily be remembered by<br> you and hard to predict by others </P>
            
            <div class="group mt-3"> <input  class="password" type="email"  name="email" value="{{ $email ?? old('email') }}" required>  <span class="highlight"></span> <span class="bar"></span> <label>Email</label>  </div>
        <div class="group mt-3"> <input  class="password"  type="password" name="password" value="" required>  <span class="highlight"></span> <span class="bar"></span> <label>Enter Password</label>  </div>
        <div class="group mt-3"> <input  class="password" type="password" name="password_confirmation" value="" required>  <span class="highlight"></span> <span class="bar"></span> <label>Confirm Password</label>  </div>

        <button class="g-btn" type="submit">Save</button>
                      
                   
                    <div class="conditions">
                        <span class="b-style">If you still need help, please visit our</span><a href="#"class="g-style">Help center</a>

                    </div>
        </form>

    </div>

</section>
@endsection



 