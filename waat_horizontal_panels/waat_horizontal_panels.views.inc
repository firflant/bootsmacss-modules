<?php
/**
 * @file
 * Views implementation.
 */

/**
 * Implements hook_views_plugins().
 */
function waat_horizontal_panels_views_plugins() {
  $path = drupal_get_path('module', 'waat_horizontal_panels');
  $plugins = array(
    'style' => array(
      'waat_horizontal_panels' => array(
        'title'           => t('WAAT Horizontal Panels'),
        'path'            => $path,
        'help'            => ('Display items as news carousel component.'),
        'handler'         => 'views_plugin_style_horizontal_panels',
        'theme'           => 'views_view_horizontal_panels',
        'uses row plugin' => TRUE,
        'uses options'    => TRUE,
        'uses grouping'   => TRUE,
        'type'            => 'normal',
      ),
    ),
  );

  return $plugins;
}
