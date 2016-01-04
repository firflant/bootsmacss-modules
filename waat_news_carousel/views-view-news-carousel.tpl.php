<?php
/**
 * @file
 * View template to display a news carousel.
 *
 * @ingroup views_templates
 */

?>
<div id="newsCarousel" class="news-carousel carousel slide" data-ride="carousel">

  <ul class="news-carousel__list-group list-group">

    <?php foreach ($rows as $i => $row) : ?>
      <li data-target="#newsCarousel" data-slide-to="<?php print $i; ?>" class="news-carousel__list-group-item list-group-item<?php if ($i == 0) print ' active'; ?>">
        <h4 class="news-carousel__list-group-label">
          <?php print $titles[$i]; ?>
        </h4>
      </li>
    <?php endforeach; ?>

    <div class="news-carousel__show-all">
      <?php print $more; ?>
    </div>
  </ul>

  <!-- Wrapper for slides -->
  <div class="news-carousel__inner-wrapper">
    <div class="carousel__inner carousel-inner">

      <?php foreach ($rows as $i => $row) : ?>
        <div class="news-carousel__item item<?php if ($i == 0) print ' active'; ?>">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?><!-- End Item -->

    </div><!-- End Carousel Inner -->
  </div>

  <!-- Controls -->
  <div class="news-carousel__controls carousel-controls">
    <a class="news-carousel__controls-left left" href="#newsCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="news-carousel__controls-right right" href="#newsCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>

</div><!-- End Carousel -->
