/**
 * @file
 * JS for Zurb Foundation 5.
 */
(function($, Backdrop, window, document, undefined) {

  // Show dropdown on hover.
  Backdrop.behaviors.zurb_foundation_6_dropdown = {
    attach: function(context, setting) {

      // custom actions here

    }
  }

  $(document).ready(function() {

    // run Javascript on page load here
    console.log("Welcome to the console");
    $(document).foundation();

  });
})(jQuery, Backdrop, this, this.document);
