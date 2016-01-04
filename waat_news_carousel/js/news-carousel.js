(function ($) {

  Drupal.behaviors.waat_news_carousel = {
    attach: function(context) {
      $('#newsCarousel').on('slid.bs.carousel', function () {
        var currentIndex = $('#newsCarousel .carousel-inner .active').index('#newsCarousel .item');
        $('#newsCarousel .list-group-item.active').removeClass('active');
        $("#newsCarousel .list-group-item[data-slide-to='" + currentIndex + "']").addClass('active');
      })
    }
  }

})(jQuery);
