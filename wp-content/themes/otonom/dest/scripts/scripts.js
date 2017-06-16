$(document).ready(function(){
 //modal();
//modalClose();
 MoveTo();
 videoShow();
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
        modal();
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
            
            
        $("body").addClass("modal");
            if (!hardMode) {
                event.target.playVideo();
            }
        }
        $(".modal_bg,.modal_close").on('click', function (event) {
            event.preventDefault();
               modalClose();
            var state = player.getPlayerState();

            if (state = 1) {
                player.stopVideo();
            };
        });
    });
};

function modal(){
    console.log('fire');
    $(".hidden").removeClass("hidden");
    $("body").addClass("modal");
}
function modalClose(){
        $("body.modal").removeClass("modal");
        $(".modal_bg").addClass("hidden");
}


 function MoveTo() {

    // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 2000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
}





