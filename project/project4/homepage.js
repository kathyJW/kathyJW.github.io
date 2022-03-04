$(document).ready(function(){

    $( ".img1" ).mouseover(function() {

        $( this ).addClass( 'dark' );

    });

    $( ".img1" ).mouseleave(function() {
        $( this ).removeClass('dark');

    });


});

// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

// shrinks/expands navbar
function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementsByClassName("top")[0].style.padding = "5px 5px";
    //document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementsByClassName("top")[0].style.padding = "15px 10px";
    //document.getElementById("logo").style.fontSize = "35px";
  }
}
