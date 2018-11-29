$(document).ready(function() {
    $('.carousel').carousel({
      interval: 1000
    });
});

$(function(){
  'use strict';
  var options = {
    prefetch: true,
    cacheLength: 2,
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
            $('.carousel').carousel({
                interval: 1000
            });
        },
  },
  smoothState = $('#main').smoothState(options).data('smoothState');
});

//typed js
var typed = new Typed(".typed", {
  strings: ['Your Digital Asset Wallet', 'Your Blockchain news source', 'Your Portfolio', 'Your Market Tracker', 'Your Block Explorer', 'Your Currency Exchange'],
    typeSpeed: 50,
//    backSpeed: 20,
    fadeOut: true,
    showCursor: false,
    smartBackspace: true, // this is a default
    loop: true
});




 