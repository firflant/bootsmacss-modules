<?php

/**
 * @file
 * Display Suite hybrid (Listing item + Media and text row) Web Component layout.
 */
?>

<!-- <article class="listing__item">


</article> -->

<article class="listing__item media-text-row">
  <div class="media-text-row__row">
    <?php if (!empty($media_text_row_media)): ?>
      <div class="media-text-row__media-col">
        <div class="listing__media">
          <?php print $media_text_row_media; ?>
        </div>
      </div>
    <?php endif; ?>
    <?php if (!empty($media_text_row_primary)): ?>
      <div class="media-text-row__body">
        <?php print $media_text_row_primary; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($media_text_row_secondary)): ?>
      <div class="media-text-row__body">
        <?php print $media_text_row_secondary; ?>
      </div>
    <?php endif; ?>
  </div>
</article>
