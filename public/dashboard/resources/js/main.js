
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

$('.carousel').carousel();
$('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
  
    for (var i=0;i<3;i++) {
      next=next.next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
    }
  });

/*tag*/
$(document).ready(function(){
  var $input = $("#app input"),
      $appendHere = $(".tagHere"),
      oldKey = 0, newKey,
      TABKEY = 13;
  $input.focus();
  
  $input.keydown(function(e){
  
    if(e.keyCode == TABKEY) {
      if(e.preventDefault) {
        e.preventDefault();
        if($(this).val() == '' || $(this).val() == ' ') {
          return false;
        }
        addTag($(this));
      }
      return false;
    }
    
    if($(this).val() == '' && e.keyCode === 12) {
      $(".tag:last-child").remove();
    }
    
  })
  
  function addTag(element) {
    var $tag = $("<div />"),$span = $("<span />"),$a = $("<a href='#' />");
    $tag.addClass('tag');
    $('<img src="resources/imgs/icon--close.png"/>').appendTo($a);
    $span.text($(element).val());
    $a.bind('click', function(){
      $tag.remove();
      $tag.unbind('click');
    });
    $a.appendTo($span);
    $span.appendTo($tag);
    $tag.appendTo($appendHere);
    $(element).val('');
  }
});

/*tag2*/
$(document).ready(function(){
  var $input = $("#app2 input"),
      $appendHere = $(".tagHere2"),
      oldKey = 0, newKey,
      TABKEY = 13;
  $input.focus();
  
  $input.keydown(function(e){
  
    if(e.keyCode == TABKEY) {
      if(e.preventDefault) {
        e.preventDefault();
        if($(this).val() == '' || $(this).val() == ' ') {
          return false;
        }
        addTag($(this));
      }
      return false;
    }
    
    if($(this).val() == '' && e.keyCode === 12) {
      $(".tag2:last-child").remove();
    }
    
  })
  
  function addTag(element) {
    var $tag = $("<div />"),$span = $("<span />"),$a = $("<a href='#' />");
    $tag.addClass('tag2');
    $('<img src="resources/imgs/icon--close.png"/>').appendTo($a);
    $span.text($(element).val());
    $a.bind('click', function(){
      $tag.remove();
      $tag.unbind('click');
    });
    $a.appendTo($span);
    $span.appendTo($tag);
    $tag.appendTo($appendHere);
    $(element).val('');
  }
});
/*certificate*/
document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});  
var $a = $(".close-btn-cer");
var $c = $(".cer-row");
$a.bind('click', function(){
  $c.remove();
  $c.unbind('click');
});