@extends('layouts.master')
@section('title')
Business Account
@endsection

<body>
    @section('content')
      <section class="business">
        <div class="container">
            <p class="feature">PROFESSIONAL ACCOUNT</p>
            <form method="post" action="{{route('personalaccount',[$id])}}" enctype="multipart/form-data">
      @csrf
              <div class="group margin-adj"> 
                <input  class="name" type="text"  name="nickname" required> <span class="highlight"></span> <span class="bar"></span> <label>Nick name</label> 
              </div>
              <!--tag--> 
              <div>
                <div id='app'>            
                  <input type="text"  value="Experience" name="experience" />
                </div>
              </div>
              <div class='tagHere'>

              </div>
              <!--tag2-->
              <div>
                <div id='app2'>                    
                  <input type="text" value="Education" name="education" />
                </div>
              </div>
              <div class='tagHere2'>

              </div>
                          
              <!--UPLOAD-->
              <div class="upload">
                <img src="resources/imgs/quality.png"/><span class="small">Certificates</span>
              
                  <div class="d-flex cer-row">
                    <div class="group mt-3"> <input  class="pass"   name="desc" value="" required>   
                      <label>Certificate Name </label>
                    </div>
                    
                      <div class="input-file-container ">  
                        <input class="input-file" id="my-file" type="file" >
                        <label  class="input-file-trigger file-return">Uploaded file</label>
                      </div>
                        <p class="file-return">

                        </p>
                    
                        <a href="#" class="close-btn-cer" ><img src="resources/imgs/icon_close.png"/></a>
                  </div>
                  <div class="d-flex">
                    <div class="group mt-3"> <input  class="pass"  name="desc" value="" required>
                      <label>Certificate Name </label> 
                    </div>
                    
                      <div class="input-file-container ">  
                        <input class="input-file" id="my-file" type="file" name="upload_file" >
                        <label tabindex="0" for="my-file" class="input-file-trigger2">Upload file</label>
                      </div>
                        <p class="">

                        </p>
                    
                  </div>
                  <div class="input_fields_wraps">

                      <a href="#" class="b-style"> <button class="add_field_buttons">+ add other cerificates</button></a>

                  </div>
               
              </div>
              <!-- End UPLOAD-->

        
          <div class="btn-box">
    
                <a  ><button class="g-btn2 d-inline" style="padding: 8px 10px!important; border:none !important;" type="submit">Enter business details</button></a>
                
                <a href="#" class="b-btn2 ">Create account</a>

          </div>
</form>         
          <div class="conditions2">
     

              <span class="b-style">By using CureTicket you are agree to</span>
              <span class="g-style">Privacy policy & Terms of use</span>
  
         
          </div>        
                          
        </div>  
        <!-- End container-->
      </section>
      <!-- End section-->

       
    @endsection
    
   
          
    </body>
          





