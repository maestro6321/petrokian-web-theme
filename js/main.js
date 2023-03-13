$("#Projects-card-child1").height($("#Projects-card-parent").height());
$("#Projects-card-child2").height($("#Projects-card-parent").height());
$("#Projects-card-child3").height($("#Projects-card-parent").height());
$(window).resize(function(){
	$("#Projects-card-child1").height($("#Projects-card-parent").height());
	$("#Projects-card-child2").height($("#Projects-card-parent").height());
	$("#Projects-card-child3").height($("#Projects-card-parent").height());
});


   $(document).ready(function(){
    
    $('.myWrapper-news').easyTicker({
        direction: 'up',
        easing: 'swing',
        speed: 'slow',
        interval: 2000,
        height: 'auto',
        visible: 0,
        mousePause: true,
        autoplay: true,
        controls: {
            up: '',
            down: '',
            toggle: '',
            playText: 'Play',
            stopText: 'Stop'
        },
        callbacks: {
            before: false,
            after: false,
            finish: false
        }
    });

});

// Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}