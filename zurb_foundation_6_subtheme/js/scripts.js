/**
 * @file
 * JS for Zurb Foundation 6 sub theme.
 */
(function($, Backdrop, window, document, undefined) {

  // Show dropdown on hover.
  Backdrop.behaviors.zurb_foundation_6_subtheme_dropdown = {
    attach: function(context, setting) {
      //your custom action here
    }
  }

  $(document).ready(function() {

    // run Javascript on page load here

//    jQuery(window).scroll(function() {
//      var win = jQuery(this);
//      if (win.scrollTop() > 30) {
//        $("html.admin-bar header.l-header").css("top", "0px");
//      } else {
//        $("html.admin-bar header.l-header").css("top", "32px");
//      }
//    });


  });
})(jQuery, Backdrop, this, this.document);
