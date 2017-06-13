$(document).ready(function(){
 modal();
//modalClose();
 MoveTo();
 //videoShow();
});

function videoShow () {
    // Load the IFrame Player API code asynchronously.

    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    var player;

    if (typeof hardMode == "undefined") hardMode = false;
    var mql = window.matchMedia("(max-width: 879px)");

    //(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) ? mobile = true : mobile = false;
    (mql.matches) ? hardMode = true : hardMode = false;

    var $GetHtmlClass = $('html').attr('class');

    $(".btn-play").on("click", function (e) {
        e.preventDefault();
        var $videoId = $(this).data('video-id');
        player = new YT.Player('ytplayer', {
            videoId: $videoId,
            events: {
                'onReady': onPlayerReady
            },
            playerVars: {}

        });

        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
            
            $(".invible").removeClass("invible");
        $("body").addClass("modal");
            if (!hardMode) {
                event.target.playVideo();
            }
        }
        $(".modal_bg,.modal_close").on('click', function (event) {
            event.preventDefault();
            var state = player.getPlayerState();

            if (state = 1) {
                player.stopVideo();
            };
            $("body.modal").removeClass("modal");
        $(".modal_bg").addClass("invible");
        });
    });
};

function modal(){
    $( "#video-start" ).on( "click", function() {
        console.log('video_start');
        
});
}
function modalClose(){
    $( ".modal_bg,.modal_close" ).on( "click", function(event) {
        event.preventDefault();
        $("body.modal").removeClass("modal");
        $(".modal_bg").addClass("invible");
});
}


 function MoveTo() {

    $(window).bind("scroll mousedown DOMMouseScroll mousewheel keyup", function (e) {
        if (e.which > 0 || e.type === "mousedown" || e.type === "mousewheel") {
            $(window).stop(true, false);
        }
    });

    $("a.scroll").bind("click", function (event) {
        event.preventDefault();
        $('html, body').scrollTo($($(this).attr('href')).offset().top, 1200);
   
    });
}





