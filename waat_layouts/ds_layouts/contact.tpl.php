<?php

/**
 * @file
 * Display Suite Contact Web Component layout.
 */
?>

<div class="contact <?php print $classes ?>">

  <?php if (!empty($contact_header)): ?>
    <div class="contact__header">
      <?php print $contact_header; ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($contact_header) OR !empty($contact_footer)): ?>
  <div class="field-extra field-extra--inline-label<?php if (!empty($contact_footer)): ?> field-extra--separator<?php endif; ?>">
   <div class="field-extra__label"><?php print t('Contact'); ?>:</div>
   <div class="field-extra__items">
  <?php endif; ?>

  <?php if (!empty($contact_title)): ?>
    <span class="contact__title"><?php print $contact_title; ?> contact details</span>
  <?php endif; ?>

  <?php if (!empty($contact_address)): ?>
    <div class="contact__row">
      <div class="contact__icon-col">
        <div class="contact__icon">
          <span class="icon icon--buildings"></span>
        </div>
      </div>
      <div class="contact__text">
        <?php if (!empty($contact_title)): ?>
          <?php print $contact_title; ?>
        <?php endif; ?>
        <?php print $contact_address; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($contact_person)): ?>
    <div class="contact__row">
      <div class="contact__icon-col">
        <div class="contact__icon">
          <span class="icon icon--user"></span>
        </div>
      </div>
      <div class="contact__text">
        <?php print $contact_person; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($contact_mail)): ?>
    <div class="contact__row">
      <div class="contact__icon-col">
        <div class="contact__icon">
          <span class="icon icon--envelope"></span>
        </div>
      </div>
      <div class="contact__text">
        <?php print $contact_mail; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($contact_phone)): ?>
    <div class="contact__row">
      <div class="contact__icon-col">
        <div class="contact__icon">
          <span class="icon icon--phone"></span>
        </div>
      </div>
      <div class="contact__text">
        <?php print $contact_phone; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($contact_link)): ?>
    <div class="contact__row">
      <div class="contact__icon-col">
        <div class="contact__icon">
          <span class="icon icon--link"></span>
        </div>
      </div>
      <div class="contact__text">
        <?php print $contact_link; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($contact_type)): ?>
    <div class="contact__row">
      <div class="contact__icon-col">
        <div class="contact__icon">
        </div>
      </div>
      <div class="contact__text">
        <?php print $contact_type; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($contact_header) OR !empty($contact_footer)): ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($contact_footer)): ?>
    <div class="contact__footer">
      <?php print $contact_footer; ?>
    </div>
  <?php endif; ?>
</div>
