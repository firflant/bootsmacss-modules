<?php
/**
 * Settings placeholder.
 */

class views_plugin_style_news_carousel extends views_plugin_style {
  /**
   * Default options.
   */
  function option_definition() {
    $options = parent::option_definition();
    // $options['title'] = array('default' => '');
    return $options;
  }

  /**
   * Add widgets for selecting fields for the feature rotator.
   */
  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);

    // $form['title'] = array(
    //   '#type' => 'select',
    //   '#title' => t('Title field'),
    //   '#options' => $options,
    //   '#default_value' => $this->options['title'],
    // );
  }
}
