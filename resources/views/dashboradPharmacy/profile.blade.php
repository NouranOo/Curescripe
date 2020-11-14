@extends('layouts.master2')
@section('title')
Profile
@endsection
<body class="dashboard">
        @section('content')

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
			<div class="p-4">
           <h2 class="green pt-3">Personal details</h2>
           <hr>
           
            
            <div class="avatar-upload">
                <div class="row">
                <form method="post" action="{{route('senteditprofile')}}" enctype="multipart/form-data"  onsubmit="return passwordvalidation()" name="signup" >
      @csrf
                    <div class="avatar-preview">
                            <!--profile pic-->
                            <img src="/{{$users->photo}}"  >
                            </div>
                        </div>
                        
 <!--change pic button-->
 <div class="avatar-edit">
        <input type='file' id="imageUpload" name="image" />
        <label for="imageUpload">Change profile picture</label>
        <p style="color:red; font-size:12px;">Acceptable format .jpg .png only<br>
            Max file size is 500kb </p>
    </div>
                        
                           
                                <div class="inside-input"> <label >Full name</label> <input  class="full" type="text" value="{{$users->fullname}}" required>  </div>

                           
                
        </div>

            </div>
            <!--input row-->
            
            <div class="row btn-row-pro">
           
                    <div class="col-sm-4">
                            <div class="inside-input"> <label class="l-res">Phone number</label> <input  class="cell-phone" type="text" name="mobile" value="{{$users->mobile}}" required>  </div>
        
                    </div>
                    <div class="col-sm-4">
                            <div class="inside-input"> <label>password</label> <input  class="key" type="text" value="" readonly> <a href="#" data-toggle="modal" data-target="#exampleModal6" class="float-right change-style">change</a> </div>
        
                    </div>
                    <div class="col-sm-4">
                            <div class="inside-input"> <label>mail</label> <input  class="message" type="text" name="email" value="{{$users->email}}" required>  </div>
        
                    </div>
            </div>
            <div class="row btn-row-pro">
                    <div class="col-sm-4">
                            
                                    <label>Gender</label>
                                    <select id="country" name="gender">
                                      @foreach($genders as $gender)
                                      <option value="{{$gender->id}}"  @if($gender->id == $users->gender_id ) selected @endif>{{$gender->description}}</option>
                                     @endforeach
                                      
                                    </select>  
                                 
                    </div>
                    <div class="col-sm-4">
                            <div class="inside-input"> <label>Birth date</label> <input  class="birth" type="date" name="date" value="{{$users->bithday}}" required>  </div>
        
                    </div>
                    <div class="col-sm-4">
                            <div class="inside-input"> <label>Home address</label> <input  class="address" type="text" name="address" value="{{$users->PhysicalAddress}}" required>  </div>
        
                    </div>
            </div>
            <div class="row-btn-pro">
                  <button class="green-btn" type="submit">Save changes</button>
                  @if($users->isActive == 0)
                    <a href="#" class="red-btn" data-toggle="modal" data-target="#exampleModal4">Deactivate my account</a>
                   @else
                   <a href="#" class="red-btn" data-toggle="modal" data-target="#exampleModal5">active</a>
                   @endif
            </div>

</form>

            <h2 class="green pt-3">Professional profile</h2>
           <hr>
           <form method="post" action="{{route('sentprofessionalprofile')}}"  onsubmit="return passwordvalidation()" name="signup" >
      @csrf
           <div class="row btn-row-pro">
                <div class="col-sm-4">
                        <div class="inside-input"> <label>Nick name</label> <input  class="nick-name" type="text" name="nickname" value="{{$users->NickName}}" required>  </div>
                        <div class="inside-input"> <textarea rows="4"  required="" ></textarea>  </div>

                </div>
                
                <div class="col-sm-4">
<!--tag2-->
<div >
        <div id='app2'>
                <label>Education</label>
          <input type="text"  name="education" value="{{$users->Education}}"  />
        </div>
      </div>
          <div class='tagHere2'></div>    
                </div>
                <div class="col-sm-4">
                        <!--tag--> 
                        <div >
                                <div id='app'>
                                        <label>Experience</label>
                        
                                  <input type="text" name="experience"  value="{{$users->Experience}}"  />
                                </div>
                              </div>
                                  <div class='tagHere'></div>    
                                        </div>
        </div>
        <h2 class="blue mt-5">Certificates</h2>
        
            

            <div class="row mb-4 business">
                <div class="col-sm-4">
                    <!--UPLOAD-->
            <div class="upload business">
                    <img src="resources/imgs/quality.png"/><span class="small">Certificates</span>
                    <div class="d-flex cer-row">
                      <div class="group mt-3"> <input  class="pass"   name="password" value="" >   <label>Certificate Name </label>  </div>
                     
                                  <div class="input-file-container ">  
                                    <input class="input-file" id="my-file1" type="file">
                                    <label  class="input-file-trigger file-return">Uploaded file</label>
                                  </div>
                                  <p class="file-return"></p>
                                
                                <a href="#" class="close-btn-cer" ><img src="resources/imgs/icon_close.png"/></a>
                    </div>
                    <div class="d-flex">
                      <div class="group mt-3"> <input  class="pass"   name="password" value="" >   <label>Certificate Name </label>  </div>
                     
                                  <div class="input-file-container ">  
                                    <input class="input-file" id="my-file2" type="file">
                                    <label tabindex="0" for="my-file3" class="input-file-trigger2">Upload file</label>
                                  </div>
                                  <p class=""></p>
                                
                    </div>
                    <a href="#" class="b-style">+ add other cerificates</a>
                    
                    
                    
                            
                            </div>
                </div><!--end of col-->
                <div class="col-sm-4">
                     <!--UPLOAD-->
            <div class="upload business">
                   <span class="small">Practice License</span>
                   
                    <div class="d-flex">
                      <div class="group mt-3"> <input  class="pass"   name="password" value="" >   <label>Certificate Name </label>  </div>
                     
                                  <div class="input-file-container ">  
                                    <input class="input-file" id="my-file4" type="file">
                                    <label tabindex="0" for="my-file5" class="input-file-trigger2">Upload file</label>
                                  </div>
                                  <p class=""></p>
                                
                    </div>
                    
                    
                    
                            
                            </div>
                </div>
                <div class="col-sm-4">
                        <div class="upload business">
                                <span class="small">Syndicate Membership</span>
                               
                                <div class="d-flex">
                                  <div class="group mt-3"> <input  class="pass"   name="password" value="" >   <label>Certificate Name </label>  </div>
                                  
                                              <div class="input-file-container ">  
                                                <input class="input-file" id="my-file6" type="file">
                                                <label tabindex="0" for="my-file7" class="input-file-trigger2">Upload file</label>
                                              </div>
                                              <p class=""></p>
                                           
                                </div>
                                
                                
                                
                                        
                                        </div>
                </div>
            </div>
           
            <button class="green-btn" type="submit">Save changes</button>
            <h2 class="blue mt-5">Business details</h2>

</form>
            <hr>
            <form method="post" action="{{route('sentbusinessdetail')}}"  onsubmit="return passwordvalidation()" name="signup" >
      @csrf
            <div class="row btn-row-pro">
            
                    <div class="col-sm-4">
                            <div class="inside-input"> <label>Business legal name</label> <input  class="legal" type="text" name="legalname" value="{{$users->BusinessLegalName}}" required>  </div>
        
                    </div>
                    <!-- <div class="col-sm-4">
                              
                            <form>
                                    <label>Business type</label>
                                    <select id="country" name="country">
                                      <option value="australia">pharmacy</option>
                                      <option value="canada">hospital</option>
                                      
                                    </select>  
                                </form> 
                    </div> -->
                    <div class="col-sm-4">
                            <div class="inside-input"> <label>Address</label> <input  class="add" type="text" name="physicaladress" value="{{$users->PhysicalAddress}}" required>  </div>
        
                    </div>
            </div>
            <div class="row btn-row-pro">
                    <div class="col-sm-6">
                            
                            <div class="inside-input" ><label>Describtion</label> <textarea rows="4" name="description" required="" >{{$users->Description}}</textarea>  </div>
    
                            
                    </div>
                    <div class="col-sm-6">
                            <!-- <div class="inside-input"> <label>Business land line</label> <input  class="cell-phone2" type="text" value="01234567890" required>  </div> -->
                            <div class="inside-input" > <label>Business phone number</label> <input  class="cell-phone" type="text" name="businessphone" value="{{$users->BusinessPhone}}" required>  </div>

                    </div>
                    
                   
            </div>

            <button class="green-btn" type="submit">Save changes</button>
</form>
        </div><!--end of container-->
 <!-- rx code -->
 <form method="post" action="{{route('deactivate')}}"  onsubmit="return passwordvalidation()">
      @csrf
 <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="/images/Group 2494.png" class="text-center"/>
            
                      <p class="text-center green">Are you sure you want to deactivate your account ?</p>
                      <div class="group"> <input   type="password"   name="currentpassword" value="" required>  <label>Enter password</label> </div>
            
                    </div>
                    <div class="modal-footer">
                     
                     <button class="red-btn2" style="display:block !important;" type="submit">Deactivate</button>
                     

                    </div>
                  </div>
                </div>
              </div><!-- rx code -->
</form>



<form method="post" action="{{route('active')}}"  onsubmit="return passwordvalidation()" >
      @csrf
 <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="/images/Group 2494.png" class="text-center"/>
            
                      <p class="text-center green">Are you sure you want to active your account ?</p>
                      <div class="group"> <input   type="password"   name="currentpassword" value="" required>  <label>Enter password</label> </div>
            
                    </div>
                    <div class="modal-footer">
                     
                     <button class="red-btn2" style="display:block !important;" type="submit">active</button>
                     

                    </div>
                  </div>
                </div>
              </div><!-- rx code -->
</form>
              <!-- rx code -->
              <form method="post" action="{{route('sentnewpass')}}"  onsubmit="return passwordvalidation()" name="signup" >
      @csrf
 <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/Group 2494.png" class="text-center"/>
            
                      <p class="text-center green">Change password</p>
                      <div class="group"> <input  type="password"  name="currentpassword" value="" required>  <label>old password</label> </div>
                      <div class="group"> <input  type="password"   name="newpassword" value="" required>  <label>new password</label> </div>

            
                    </div>
                    <div class="modal-footer">
                   <button class="contact-btn" type="submit">save</button>
                    </div>
                  </div>
                </div>
              </div><!-- rx code -->
</form>
            </div><!-- page content -->
     
    @endsection