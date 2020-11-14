@extends('layouts.master2')
@section('title')
home
@endsection
@section('content')


      <!-- Page Content -->
      <div id="page-content-wrapper">
        <a href="#menu-toggle" class="menuopener" id="menu-toggle">
          <i class="fa fa-bars"></i>
        </a>
			
        <div id="home" class=" first-section" >
          <div class="container">
                    
						<div class="text-center item">
							<div class="">
								<div class="big-tagline text-center">
									<h2>
                    Find Patient <strong>RX</strong>
									</h2>
									<p class="lead">
                    You Can Find Rx By using QR Code<br>Or Mobile Number + PIN Code
                  </p>
								</div>
							</div>
						</div>
									
					</div><!-- end container -->          
        </div><!--section-->

        <!--first-->
        <section class="first-squares">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 ">
                <div class="d-flex small-square">
                  <img src="images/Search Icon.png"/>
                  <div class="group">
                     <input  class="search" type="text" value="Type mobile number and PIN code to search" required>   
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="small-square">
                  <span>Scan QR</span><img src="images/qr-code-scan.png"/>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="small-square">
                  <span>Rx Unique code</span>
                </div>
              </div>
            </div>  
          </div>
        </section>
        <!--first-->
        <!--second-->
        <section class="mt-4">
          <div class="quic-links">
            <h2>QUICK LINKS</h2>
            <div class="row">
              <a href="sold-items.html" class=" col-sm-4">
                <div class="big-square ">
                  <span class="num">1654</span><img src="images/Group 2559.png" class="float-right"/>
                  <hr>
                  <p>Sold items today</p>
                </div>

                </a>
                <a href="unavailable-items.html" class=" col-sm-4">
                  <div class="big-square">
                    <span class="num">1654</span>
                    <img src="images/Group 2558.png" class="float-right"/>
                    <hr>
                    <p>Unavailable items today</p>
                  </div>
                </a>
                <a href="#" class=" col-sm-4">
                  <div class="big-square ">
                    <span class="num">1654</span>
                    <img src="images/Group 2594 (1).png" class="float-right"/>
                    <hr>
                    <p>Total dispensed Rx(s)</p>
                  </div>
                </a>   
            </div>
          </div>
        </section>
        <!--second-->
      </div><!-- page content -->     
    @endsection