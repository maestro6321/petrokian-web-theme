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