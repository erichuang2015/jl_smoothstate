$(document).ready(function() {
        AOS.init();
    });


$(function(){
  'use strict';
  var $page = $('#main'),
      options = {
        debug: true,
        prefetch: true,
        cacheLength: 2,
        onStart: {
//          duration: 450, // Duration of our animation
          duration: 1000, // Duration of our animation
          render: function ($container) {
            // Add your CSS animation reversing class
            $container.addClass('is-exiting');
            // Restart your animation
            smoothState.restartCSSAnimations();
          }
        },
        onReady: {
          //duration: 450,
          duration: 1000,
          render: function ($container, $newContent) {
            // Remove your CSS animation reversing class
            $container.removeClass('is-exiting');
            // Inject the new content
            $container.html($newContent);
          }
        },
          //add onAfter --> https://stackoverflow.com/questions/35620499/reinitializing-page-scripts-after-smoothstate-js-page-change
          onAfter: function() {
                AOS.init();
            }
      },
      smoothState = $page.smoothState(options).data('smoothState');
});
