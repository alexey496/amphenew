(function ($) {
  Drupal.behaviors.yourName = {
    attach : function(context, settings) {
      $(function () {
        jQuery(document).ready(function () {
          $(".phone-number.form-control.form-text").mask("+7 (999) 999-99-99");
        });
      });
    }
  };
})(jQuery);
