<?php

/**
 * @file
 * Display Suite hybrid (Listing item + Media and text row) Web Component layout.
 */
?>

<article class="listing__item">
  <div class="listing__item-row">
    <?php if (!empty($column_first)): ?>
      <div class="listing__item-col">
        <?php print $column_first; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($column_second)): ?>
      <div class="listing__item-col">
        <?php print $column_second; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($column_third)): ?>
      <div class="listing__item-col">
        <?php print $column_third; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($column_fourth)): ?>
      <div class="listing__item-col">
        <?php print $column_fourth; ?>
      </div>
    <?php endif; ?>
  </div>
</article>
