<?php

/**
 * @file
 * Display Suite Listing item Web Component layout.
 */
?>

<article class="listing__item">
  <?php if (!empty($listing_media)): ?>
    <div class="listing__item-media">
      <?php print $listing_media; ?>
    </div>
  <?php endif; ?>
  <div class="listing__item-text">
    <?php if (!empty($listing_meta)): ?>
      <span class="listing__item-meta"><?php print $listing_meta; ?></span>
    <?php endif; ?>
    <?php if (!empty($listing_header)): ?>
      <h3 class="listing__item-title"><?php print $listing_header; ?></h3>
    <?php endif; ?>
    <?php print $listing_body; ?>
  </div>
  <?php if (!empty($listing_footer)): ?>
    <div class="listing__item-footer">
      <?php print $listing_footer; ?>
    </div>
  <?php endif; ?>
</article>
