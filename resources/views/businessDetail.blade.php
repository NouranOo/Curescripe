@extends('layouts.master')
@section('title')
Business Detail
@endsection

@section('content')
      <section class="details">
        <div class="container">
                <p class="feature mb-3">BUSINESS DETAILS</p>

                <form method="post" action="{{route('sentbusienssdeatil',[$id])}}" enctype="multipart/form-data">
      @csrf
                <div class="group"> <input   class="bag" name="LegalName" required>  <span class="highlight"></span> <span class="bar"></span><label>Business legal name</label>  </div>

               
                        
                        <select id="country" name="usertype">

                            <option value="2">doctor</option>
                          <option value="3">pharmacy</option>
                         
                          
                        </select>  
                    
                    <div class="group"> <textarea rows="4" class="disc" name="description" required=""></textarea> <span class="highlight"></span> <span class="bar"></span> <label>Description</label> </div>

                    <div class="group"> <input   class="mobile" name="phone" required>  <span class="highlight"></span> <span class="bar"></span><label>LandLine / Mobile number</label>  </div>

                   
                         
                          
                          <a  ><button class="b-btn mt-3" style="padding: 8px 10px!important; border:none !important;" type="submit">Create account</button></a>

                        
                        <div class="conditions">
                            <span class="b-style">By using CureTicket you are agree to</span><span class="g-style">Privacy policy & Terms of use</span>
    
                        </div>

</form>
        </div>
    
    </section>
  @endsection
    
    
    
    
      