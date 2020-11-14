<script>
          function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
      
            }
            document.getElementById(cityName).style.display = "block";
          }
        </script>
      
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
      
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
          crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
          integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
          crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
          integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
          crossorigin="anonymous"></script>
        <script src="/vendors/js/wow.min.js"></script>
        <script>
          new WOW().init();
        </script>
        <!--show/hide password-->
        <script>
                $(".toggle-password").click(function() {
          
          $(this).toggleClass("fa-eye fa-eye-slash");
          var input = $($(this).attr("toggle"));
          if (input.attr("type") == "password") {
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
          }
          });
                </script>
        
      
        <script src="/resources/js/main.js"></script>

        <!-- add other cerificates  -->
       <script>
                  $(document).ready(function() {
                var max_fields      = 50; 
                var wrapper   		= $(".input_fields_wraps"); //Fields wrapper
                var add_button      = $(".add_field_buttons"); //Add button ID
                
                var x = 1; 
                $(add_button).click(function(e){ 
                  e.preventDefault();
                  if(x < max_fields){ 
                    x++; 
                    $(wrapper).append('<div><div class="d-flex cer-row"><div class="group mt-3"><input  class="pass"   name="password" value="" required><label>Certificate Name</label></div><form action="#">  <div class="input-file-container "><input class="input-file" id="my-file'+x+'" type="file">   <label  class="input-file-trigger file-return">Uploaded file</label>  </div> <p class="file-return"></p> </form><a href="#" class="close-btn-cer" ><img src="resources/imgs/icon_close.png"/></a></div>'+
                    '<div class="d-flex"> <div class="group mt-3"> <input  class="pass"   name="password" value="" required> <label>Certificate Name </label> </div>  <form action="#"><div class="input-file-container ">  <input class="input-file" id="my-file'+x+'" type="file"><label tabindex="0" for="my-file'+x+'" class="input-file-trigger2">Upload file</label></div><p class=""></p></form> </div><a href="#" class="remove_field" style="color: #fb0404;font-size: 15px;font-weight: bold;">Remove</a></div>'); //add input box
                
                
                
                  }
                });

 
                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                  e.preventDefault(); $(this).parent('div').remove(); x--;
                })
              });
      </script>




<script>
function passwordvalidation(){ /*edit a*/  /*there's an error in this pop up so i make validation without test it */
     

  debugger;
     var pass1 = document.forms["signup"]["password"].value.trim();
     var pass2 = document.forms["signup"]["password1"].value.trim();

  if(pass1 == ""){

         document.getElementById("pass1error").innerHTML="must be the filled";
         console.log("must be the filled");
          return false;
     }else{
        document.getElementById("pass1error").innerHTML=""; 
 }


   if(pass2 == ""){

         document.getElementById("pass2error").innerHTML="must be the filled";
         console.log("must be the filled");
   
          return false; 

}else{
    document.getElementById("pass2error").innerHTML="";
}
if(pass1 !== pass2){

  document.getElementById("pass2error").innerHTML="two paassword must be the same";
  console.log("two paassword must be the same");
   
        return false; 
     }
     else{

document.getElementById("pass2error").innerHTML="";
     }
}






</script>
