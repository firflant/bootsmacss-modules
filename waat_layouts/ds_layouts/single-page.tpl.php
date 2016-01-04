<?php
/**
 * @file
 * Display Suite Single Page Web Component layout.
 */
?>

<div class="single-page">
    <?php if (!empty($single_page_header)): ?>
      <div class="single-page__header">
          <?php print $single_page_header; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($single_page_media)): ?>
      <div class="single-page__media">
          <?php print $single_page_media; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($single_page_body)): ?>
      <div class="single-page__body">
          <?php print $single_page_body; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($single_page_footer)): ?>
      <div class="single-page__footer">
          <?php print $single_page_footer; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($single_page_footer_second)): ?>
      <div class="single-page__footer-second">
          <?php print $single_page_footer_second; ?>
      </div>
    <?php endif; ?>
</div>
