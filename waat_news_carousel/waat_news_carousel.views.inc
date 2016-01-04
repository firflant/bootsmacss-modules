<?php
/**
 * @file
 * Views implementation.
 */

/**
 * Implements hook_views_plugins().
 */
function waat_news_carousel_views_plugins() {
  $path = drupal_get_path('module', 'waat_news_carousel');
  $plugins = array(
    'style' => array(
      'waat_news_carousel' => array(
        'title'           => t('WAAT News Carousel'),
        'path'            => $path,
        'help'            => ('Display items as news carousel component.'),
        'handler'         => 'views_plugin_style_news_carousel',
        'theme'           => 'views_view_news_carousel',
        'uses row plugin' => TRUE,
        'uses options'    => TRUE,
        'uses grouping'   => TRUE,
        'type'            => 'normal',
      ),
    ),
  );

  return $plugins;
}
