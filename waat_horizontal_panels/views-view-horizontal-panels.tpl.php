<?php
/**
 * @file
 * View template to display a horizontal panel group.
 *
 * @ingroup views_templates
 */


?>

<div class="panel-group panel-group--horizontal" id="accordion" role="tablist" aria-multiselectable="true">

  <?php foreach ($rows as $i => $row) : ?>
    <div class="panel panel-default <?php if ($i == 0) print 'is-active'; ?>">
      <div class="panel-heading">
        <a data-toggle="collapse" data-parent="#accordion" href="#accordion-<?php print $i; ?>" aria-controls="accordion-<?php print $i; ?>">
          <h4 class="panel-title"><?php print $titles[$i]; ?></h4>
        </a>
      </div>
      <div id="accordion-<?php print $i; ?>" class="panel-collapse collapse <?php if ($i == 0) print 'in'; ?>" role="tabpanel" aria-labelledby="accordion-<?php print $i; ?>">
        <div class="panel-body">
          <div class="panel__rotate-wrapper">
            <?php print $row; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

</div>
