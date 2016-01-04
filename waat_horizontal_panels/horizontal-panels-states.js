(function ($) {

  Drupal.behaviors.waat_horizontal_panels = {
    attach: function(context) {
      $('.collapse').on('show.bs.collapse', function() {
          $(this).parent().addClass('is-active');
      });
      $('.collapse').on('hide.bs.collapse', function() {
        $(this).parent().removeClass('is-active');
      });
    }
  }

})(jQuery);
