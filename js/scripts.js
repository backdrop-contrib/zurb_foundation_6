/**
 * @file
 * JS for Zurb Foundation 5.
 */
(function ($, Backdrop, window, document, undefined) {

  // Show dropdown on hover.
  Backdrop.behaviors.zurb_foundation_5_dropdown = {
    attach: function(context, setting) {
      $('.dropdown').once('zurb-foundation-5-dropdown', function(){
        // Show dropdown on hover.
        $(this).mouseenter(function(){
          $(this).addClass('open');
        });
        $(this).mouseleave(function(){
          $(this).removeClass('open');
        });
      });
    }
  }

  $(document).ready(function() {

// run Javascript on page load here
console.log("Welcome to the console");
$(document).foundation();

  });
})(jQuery, Backdrop, this, this.document);
