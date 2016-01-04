<?php

/**
 * @file
 * Display Suite Grid listing item Web Component layout.
 */
?>

<article class="listing__item">
  <div class="listing__item-wrapper">
      <?php if (!empty($listing_media)): ?>
        <span class="listing__item-media">
          <?php print $listing_media; ?>
        </span>
      <?php endif; ?>
      <span class="listing__item-text">
        <?php if (!empty($listing_header)): ?>
          <h3 class="listing__item-title"><?php print $listing_header; ?></h3>
        <?php endif; ?>
        <?php print $listing_body; ?>
      </span>
    </a>
  </div>
</article>
