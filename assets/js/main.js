$(document).ready(function() {
    $('.carousel').carousel({
      interval: 1000
    });
});

$(function(){
  'use strict';
  var options = {
    prefetch: true,
    cacheLength: 10,
    blacklist: '.no-smoothState',
    onStart: {
      duration: 1000, // Duration of our animation
      render: function ($container) {
        // Add your CSS animation reversing class
        $container.addClass('is-exiting');

        // Restart your animation
        smoothState.restartCSSAnimations();
      }
    },
    onReady: {
      duration: 0,
      render: function ($container, $newContent) {
        // Remove your CSS animation reversing class
        $container.removeClass('is-exiting');

        // Inject the new content
        $container.html($newContent);

      }
    },
      onAfter: function() {
          $(document).ready(function() {
            $('.carousel').carousel({
                interval: 1000
            });
          });
        },
  },
  smoothState = $('#main').smoothState(options).data('smoothState');
});


//smooth scroll --> https://css-tricks.com/snippets/jquery/smooth-scrolling/

//$(document).ready(function(){
//  // Add smooth scrolling to all links
//  $("#downloads a").on('click', function(event) {
//
//    // Make sure this.hash has a value before overriding default behavior
//    if (this.hash !== "") {
//      // Prevent default anchor click behavior
//      event.preventDefault();
//
//      // Store hash
//      var hash = this.hash;
//
//      // Using jQuery's animate() method to add smooth page scroll
//      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
//      $('html, body').animate({
//        scrollTop: $(hash).offset().top
//      }, 800, function(){
//
//        // Add hash (#) to URL when done scrolling (default click behavior)
//        window.location.hash = hash;
//      });
//    } // End if
//  });
//});
//
//



 