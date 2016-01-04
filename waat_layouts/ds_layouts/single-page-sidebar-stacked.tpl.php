<?php
/**
 * @file
 * Display Suite Single page with sidebar Web Component layout.
 */
?>

<div class="section--full-width">

  <?php if (!empty($single_page_top_left) || !empty($single_page_top)): ?>
    <div class="section--top">
      <div class="container">
        <div class="row">
          <div class="section--top__left col-md-3">
            <?php if (!empty($single_page_top_left)): ?>
              <?php print $single_page_top_left; ?>
            <?php endif; ?>
          </div>
          <div class="section--top__main col-md-9">
            <?php if (!empty($single_page_top)): ?>
              <?php print $single_page_top; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($single_page_sidebar) || !empty($single_page_content)): ?>
    <div class="section--even">
      <div class="container">
        <div class="row">
          <aside class="section--sidebar-left col-md-3">
            <?php if (!empty($single_page_sidebar)): ?>
              <?php print $single_page_sidebar; ?>
            <?php endif; ?>
          </aside>
          <main class="section--content col-md-9">
            <div class="page-content">
              <a id="main-content" tabindex="-1"></a>
              <?php if (!empty($single_page_content)): ?>
                <?php print $single_page_content; ?>
              <?php endif; ?>
            </div>
          </main>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($single_page_bottom_left) || !empty($single_page_bottom_right)): ?>
    <div class="section--bottom section--odd">
      <div class="container">
        <div class="row">
          <div class="section--bottom__left col-md-6">
            <?php if (!empty($single_page_bottom_left)): ?>
              <?php print $single_page_bottom_left; ?>
            <?php endif; ?>
          </div>
          <div class="section--bottom__right col-md-6">
            <?php if (!empty($single_page_bottom_right)): ?>
              <?php print $single_page_bottom_right; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

</div>
