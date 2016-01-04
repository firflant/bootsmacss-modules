<?php
/**
 * @file
 * Display Suite Single page with sidebar Web Component layout.
 */
?>

<div class="row">
  <?php if (!empty($single_page_sidebar)): ?>
  <aside class="section--sidebar-left col-md-3">
    <?php print $single_page_sidebar; ?>
  </aside>

  <main class="section--content col-md-9">
  <?php else: ?>
  <main class="section--content">
  <?php endif; ?>

    <div class="page-content">
      <?php if (!empty($single_page_content)): ?>
        <?php print $single_page_content; ?>
      <?php endif; ?>
    </div>

    <?php if (!empty($single_page_postcontent)): ?>
      <?php print $single_page_postcontent; ?>
    <?php endif; ?>

  </main>

</div>
