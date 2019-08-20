// All scripts related to the homepage
var $ = jQuery.noConflict();


// Have no idea what this is
// $(function () {
//     $('.count-up').numerator({
//         toValue: 2800,
//         delimiter: ',',
//         duration: 2000
//     });
// });
// EndHave no idea what this is


// Script for the video player on homepage
$(document).ready(function () {
    // $("#myvideo").vide("https://player.vimeo.com/external/312114816.hd.mp4?s=4df478cb3455562c6d67f3ee68140e4cb3e1b5b1&profile_id=175",
    $("#myvideo").vide("https://elgeyomarakwet.go.ke/wp-content/uploads/2019/05/EMC-Achievement-uOpSAYALaaU.mp4",
        {
            volume: 0,
            playbackRate: 1,
            muted: true,
            loop: true,
            autoplay: true,
            position: "50% 50%", 
            posterType: "detect",
            resizing: true
        }
    );
});
// End Script for the video player on homepage

// Manipulating document window
// jQuery(function($) {
//     'use strict';

//     (function() {
  $(document).ready(function () {

        var frameHomepage = $('.frame.frontpage-slider');
        var wrapHomepage = frameHomepage.parent();

        function setSize() {
            var width = wrapHomepage.width();
            $('.frontpage-slider .slidee > li').width(width - 1);
        }
        // Call Sly on frame
        frameHomepage.sly({
            horizontal: 1,
            itemNav: 'forceCentered',
            smart: 1,
            activateOn: null,
            activateMiddle: true,
            mouseDragging: 0,
            touchDragging: 1,
            releaseSwing: 1,
            startAt: 0,
            scrollBy: 0,
            speed: 300,
            elasticBounds: 1,
            pagesBar: wrapHomepage.find('.pages'),
            activatePageOn: 'click',
            prevPage: wrapHomepage.find('.slide-arrows.left, .slider-nav.slider-nav-left'),
            nextPage: wrapHomepage.find('.slide-arrows.right, .slider-nav.slider-nav-right')
        });
        setSize();

        $(window).resize($.throttle(150, function() {
            setSize();
            setTimeout(function() {
                frameHomepage.sly('reload');
            }, 300);
        }));
    // }());
});