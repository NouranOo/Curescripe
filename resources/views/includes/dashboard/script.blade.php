<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="js/script.js"></script>


 
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@include('sweet::alert')
<!-- ALL JS FILES -->
<script>
  
    $('#example').DataTable();

</script>
 <script src="/dashboard/js/all.js"></script>
    <!-- ALL PLUGINS -->
   
    
    <script>
            (function($) {
                "use strict";
                $("#menu-toggle").click(function(e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });
                smoothScroll.init({
                    selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
                    selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
                    speed: 500, // Integer. How fast to complete the scroll in milliseconds
                    easing: 'easeInOutCubic', // Easing pattern to use
                    offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
                    callback: function ( anchor, toggle ) {} // Function to run after scrolling
                });
            })(jQuery);
      </script>
    <!-- Menu Toggle Script -->
    
    <script>
          /*responsive nav*/
          const navbarToggler = document.querySelector(".navbar-toggler");
          const navbarMenu = document.querySelector(".navbar ul");
          const navbarLinks = document.querySelectorAll(".navbar a");

          navbarToggler.addEventListener("click", navbarTogglerClick);

          function navbarTogglerClick() {
            navbarToggler.classList.toggle("open-navbar-toggler");
            navbarMenu.classList.toggle("open");
          }

          navbarLinks.forEach(elem => elem.addEventListener("click", navbarLinkClick));

          function navbarLinkClick() {
            if(navbarMenu.classList.contains("open")) {
              navbarToggler.click();
            }
          }
    </script>