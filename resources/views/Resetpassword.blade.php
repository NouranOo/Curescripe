@extends('layouts.master')
@section('title')
Reset Password
@endsection

@section('content')
<section class="details">
    <div class="container">
    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
            <p class="feature">RESET PASSWORD</p>
            <P >Enter the SMS/WhatsApp code sent to your phone<br> to reset your password</P>
            
                <div class="group mt-3"> <input  class="pass" type="email"  name="email" value="{{ old('email') }}" required>   <label>4 Digit code goes here</label>  </div>
                <span class="b-style">Didn't Receive the code yet ?</span><a href="#"class="b-style">Retry in 51</a>
<div class="mt-4">
    <button class="g-btn2" type="submit">Next</button>
    <a href="#" class="b-btn2 mt-3">Resend code</a>
    <a href="#" class="g-l">Change Email</a>
</div>
                      
                   
                    <div class="conditions">
                        <span class="b-style">If you still need help, please visit our</span><a href="#"class="g-style">Help center</a>

                    </div>

                    </form>
    </div>

</section>



@endsection