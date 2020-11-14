@extends('layouts.master2')
@section('title')
contact us
@endsection
@section('content')


        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
		    	<section class="contact">
                    <div class="container">
                        <h2 class="green mt-3">Contact us</h2>
                        <hr>
                        <form method="post" action="{{route('sentcontactus')}}"  onsubmit="return passwordvalidation()" name="signup" >
                                   @csrf
                            <div class="row mt-5">
                              <div class="col-sm-6">
                                  <div class="group"> <input   type="text" name="phone" required> <span class="highlight"></span> <span class="bar"></span> <label>Mobile number</label> </div>
                      
                              </div>
                              <div class="col-sm-6">
                                  <div class="group "> <input  type="text" name="name" required> <span class="highlight"></span> <span
                                    class="bar"></span> <label>Your name</label> </div>
                              </div>
                              
                            </div>
                            <div class="row mt-3">
                                    <div class="col-sm-6">
                                        <div class="group"> <input   type="text" name="subject" required> <span class="highlight"></span> <span class="bar"></span> <label>subject</label> </div>
                            
                                    </div>
                                    <div class="col-sm-6">
                                           
                    
                                                    <select id="country" name="issue">
                                                    @foreach($issues as $issue)
                                                        <option value="{{$issue->id}}">{{$issue->description}}</option>
                                                     
                                                      @endforeach
                                                    </select>  
                                               
                                    </div>
                                    
                                  </div>
                            <div class="group mt-3 subject"> <textarea rows="4" required="" name="message"></textarea> <span class="highlight"></span> <span class="bar"></span> <label>Type your massage here</label> </div>
                          </div>
                         <button class="contact-btn" type="submit">Send</button>

          

</form>

            </section>
            


            </div><!-- page content -->

@endsection