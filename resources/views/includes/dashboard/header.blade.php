<nav class="navbar text-light ">

<a  href="index.html" >
  <img src="/dashboard/images/Logo.png" class="logo-top" ><span class="typo ">MAHFOUZ Pharmacy</span>
</a>

<div class="row">

  <ul class="float-right ">
    
    <li>
        <a href="notification.html" class="notification">
            <i class="fas fa-bell"></i>
            <span class="badge">3</span>
        </a>
    </li>
    
    
    <li class="extract">
        <a  href="#" class="user-name"> Dr. Ahmed Hassan </a>
        <a  href="#"  ><img src="/dashboard/images/profile.jpg" class="top-img"/> </a>
        <div class="drop-img">
            <a href="#">view profile</a>
            <hr>
            <a href="{{route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                              
                                                 
                                                 <i class="fa fa-power-off">logout</i>
                                                 
                                                 
                                                 </a>
                                             <form id="logout-form" action="{{route('logout')}}" method="POST"
                                                 style="display: none;">
                                                 @csrf
                               </form>
            </div>
        
    </li>

  </ul>
  <button class="navbar-toggler">
    <span></span>
  </button>
</div>
</nav>


<div id="wrapper">

<!-- Sidebar-wrapper -->
<div id="sidebar-wrapper">
<div class="side-top">

<ul class="sidebar-nav" style="list-style: none; padding-left: 0;">
    <li class="first active"><a class=" " href="index.html">Home</a></li>
    <li class="second"><a  href="#" >Prescriptions</a></li>
    <li class="third"><a  href="reports.html">Reports</a></li>
    <hr>
    <li class="fourth"><a href="#">Settings</a></li>
    <li class="fifth"><a href="contact-us.html">Contact us</a></li>
</ul>
</div>
</div>
<!-- End Sidebar-wrapper -->