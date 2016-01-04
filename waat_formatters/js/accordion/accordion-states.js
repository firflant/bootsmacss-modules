(function ($) {
  Drupal.behaviors.waatAccordion = {
    attach: function (context, settings) {
      $('.collapse').on('show.bs.collapse', function() {
          var id = $(this).attr('id');
          $('a[href="#' + id + '"]').closest('.panel-heading').addClass('accordion--active');
          $('a[href="#' + id + '"] .panel-title span').html('<i class="glyphicon glyphicon-minus"></i>');
      });
      $('.collapse').on('hide.bs.collapse', function() {
          var id = $(this).attr('id');
          $('a[href="#' + id + '"]').closest('.panel-heading').removeClass('accordion--active');
          $('a[href="#' + id + '"] .panel-title span').html('<i class="glyphicon glyphicon-plus"></i>');
      });
    }
  };

}(jQuery));
